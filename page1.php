<?php
session_start();

require_once "bootstrap.php";

if(!$_SESSION["auth"])
{
    header("location:index.php");
    die();
}

$id_user = $_SESSION["id_user"];
$res=$user->getImgUser($id_user);




require_once "page1.view.php";

?>