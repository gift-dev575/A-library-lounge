<?php

$db_serverName = "localhost";
 $db_userName = "root";
 $db_password = "??Amelie1??";
 $db_databaseName = "library";
$conn = mysqli_connect($db_serverName,$db_userName,$db_password,$db_databaseName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());

}

?>