<?php
session_start();
require_once "bootstrap.php";

if(isset($_POST["btnOK"])){
    $user->loginUser($_POST["login"], $_POST["password"]);
    if($_SESSION["auth"]){
        header("Location:page1.php");
    }
    else 
    {
         $error = "<a href='reg.php' class='areg'>Зарегистрируйтесь</a>";
    }
}

require_once "index.view.php";