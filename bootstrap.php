<?php
$config=require_once "Config.php";
require_once "Connection.php";
require_once "UserData.php";
$user=new UserData(Connection::make($config));