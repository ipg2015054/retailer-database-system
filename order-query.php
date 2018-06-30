<?php
require 'connect.inc.php';
$cname = $_GET['cname'];
$p1 = $_GET['p1'];
$p2 = $_GET['p2'];
$p3 = $_GET['p3'];
$p4 = $_GET['p4'];
$p5 = $_GET['p5'];
$q1 = $_GET['q1'];
$q2 = $_GET['q2'];
$q3 = $_GET['q3'];
$q4 = $_GET['q4'];
$q5 = $_GET['q5'];
$date =  $_GET['date'];


	
	
	$query2 = "INSERT INTO `order` VALUES ('','$date','$cname')";
	mysql_query($query2);

	$query3 = "SELECT `order_id` FROM `order` WHERE order.customer_name = '$cname' ";
	if($query_run3 = mysql_query($query3)){

	while($query_row3 = mysql_fetch_assoc($query_run3))
	{
		$oid = $query_row3['order_id'];
	}
	
	

}

	


$query4 = "INSERT INTO `order_detail` VALUES ('','$q1','$date','$oid','$oid','$p1')";
	mysql_query($query4);


	$query5 = "INSERT INTO `order_detail` VALUES ('','$q2','$date','$oid','$oid','$p2')";
	mysql_query($query5);
	$query6 = "INSERT INTO `order_detail` VALUES ('','$q3','$date','$oid','$oid','$p3')";
	mysql_query($query6);
	$query7 = "INSERT INTO `order_detail` VALUES ('','$q4','$date','$oid','$oid','$p4')";
	mysql_query($query7);
	$query8 = "INSERT INTO `order_detail` VALUES ('','$q5','$date','$oid','$oid','$p5')";
	mysql_query($query8);

	$query="UPDATE `product` SET `in_stock`=product.in_stock - '$q1' WHERE '$p1' = product.product_name";
	mysql_query($query);
	$query="UPDATE `product` SET `in_stock`=product.in_stock - '$q2' WHERE '$p2' = product.product_name";
	mysql_query($query);
	$query="UPDATE `product` SET `in_stock`=product.in_stock - '$q3' WHERE '$p3' = product.product_name";
	mysql_query($query);
	$query="UPDATE `product` SET `in_stock`=product.in_stock - '$q4' WHERE '$p4' = product.product_name";
	mysql_query($query);
	$query="UPDATE `product` SET `in_stock`=product.in_stock - '$q5' WHERE '$p5' = product.product_name";
	mysql_query($query);

	echo 'Order recieved';









?>