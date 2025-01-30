<?php
$host="localhost";
$username='root';
$password='';
$dbname='crud';

$conn=new mysqli($host, $username,$password ,$dbname);
if ($conn->connect_error) {
  die("failed to connect").$conn->connect_error;
}
?>