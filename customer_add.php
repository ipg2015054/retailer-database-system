<?php


require 'connect.inc.php';
$cid = '';
$name = $_GET['name'];
$add = $_GET['address'];
$phone = $_GET['number'];
$email = $_GET['email'];

$query = "INSERT INTO `customer` VALUES ('$cid','$name','$add','$phone','$email')";
mysql_query($query);
echo "customer added";
?>