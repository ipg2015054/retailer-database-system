<?php


require 'connect.inc.php';
$cid = '';
$name = $_GET['name1'];
$add = $_GET['address1'];
$phone = $_GET['number1'];
$email = $_GET['email1'];
$paymethod = $_GET['pay'];

$query = "INSERT INTO `supplier` VALUES ('$cid','$name','$add','$phone','$email','$paymethod')";
mysql_query($query);
echo "supplier added";
?>