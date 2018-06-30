<?php


require 'connect.inc.php';
$pname = $_GET['pname'];
$cprice = $_GET['cprice'];
$sprice = $_GET['sprice'];
$quantity = $_GET['quantity'];
$sid = $_GET['sid'];

$query = "INSERT INTO `product` VALUES ('','$pname','$cprice','$sprice','$quantity','$sid','1')";
mysql_query($query);
echo "product added";
?>