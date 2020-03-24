<?php
session_start();

class UserData{
    public $pdo;
    public function __construct(PDO $pdo){
        $this->pdo=$pdo;
    }
    public function findOneUser($login,$password){
        $q="SELECT * FROM users WHERE login=:login and password=:password";
        $stmt=$this->pdo->prepare($q);
        $stmt->execute(["login"=>$login, "password"=>$password]);
        return $stmt->fetch();
    }
    public function loginUser($login,$password){
        $res=$this->findOneUser($login,$password);
        if($res){
            $_SESSION["auth"]=true;
            $_SESSION["id_user"]=$res->id_user;
        }
        else {
            $_SESSION["auth"]=false;
        }
    }
    public function regUser($login, $password, $nik, $image){
        $res=$this->findOneUser($login, $password);
        if($res){
            $_SESSION["error"]="<div>Такой пользователь уже зарегистрирован!!!!!!</div>";
        }
        else {
            $q="INSERT INTO users (login,password,nik) VALUES (:login,:password,:nik)";
            $stmt=$this->pdo->prepare($q);
            $stmt->execute([
                "login"=>$login, 
                "password"=>$password, 
                "nik"=>$nik]); 

            $id = $this->pdo->lastInsertId();

            $z="INSERT INTO images (id_user,name_img) VALUES (:id, :img)";
            $stmt=$this->pdo->prepare($z);
            $stmt->execute(["id"=>$id, "img"=>$image]);

        }
        
    }
    public function getImgUser($id_user)
    {

         $g="SELECT name_img FROM images,users  WHERE  users.id_user=images.id_user and  users.id_user=:idUser";
         $stmt=$this->pdo->prepare($g);
         $stmt->execute(["idUser" => $id_user]);
          return $stmt->fetchAll();
    }

    // public function addImg($data)
    // {
    //      $q="INSERT INTO images (name_img,id_user) VALUES (:imageR,:id_users)";
    //      $stmt=$this->pdo->prepare($q);
    //      $stmt->execute(["id_users"=>$data["id_user"], "name_img"=>$data["imageR"]]);
         
    // }
    public function logout(){
        unset($_SESSION["auth"]);
        session_destroy();
    }
}