<?php
$servername=getenv('DB_HOST')?:'localhost';
$username=getenv('DB_USER')?:'root';
$password=getenv('DB_PASS')?:'';
$dbname=getenv('DB_NAME')?;'test';

$conn=new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error){
  die("connection failed:" .$conn->connect_error);
}
?>


