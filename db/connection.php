<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "Task_Mate_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
  die("Failed to connect!");
}

?>
