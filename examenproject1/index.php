<?php

session_start();

$servername = "localhost";
$username = "test";
$password = "test";

try {
  $conn = new PDO("mysql:host=$servername;dbname=rijschool", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn->query("UPDATE `accounts` SET `name` = 'test2' WHERE `accounts`.`id` = 1;");

if(!array_key_exists('pagina', $_GET)) {
  require_once('MainWebsite.php');
  exit;
}

if(file_exists($_GET['pagina']).".php") {
  require_once($_GET['pagina'].".php");
  exit;
}

require_once('MainWebsite.php');

