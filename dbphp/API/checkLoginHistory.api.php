<?php
include "./autoLoadClasses.api.php";

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$controller = new Controller;
$controller->checkLoginCredentials($_POST['username'],$_POST['password']);




// exit(json_encode('response as json data'));