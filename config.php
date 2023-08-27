<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "crud";



$conn = new PDO("mysql:host=$host;dbname="  .  $dbname, $user, $pass);
?>