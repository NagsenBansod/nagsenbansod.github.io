<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="abhi";
// Create connections
$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if(!$connect) 
{
  die("Connection failed: ".mysqli_connect_error());
}
  echo "Connection Sucessful";
?>