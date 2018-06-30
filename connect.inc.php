<?php

$host_name = 'localhost';
$username = 'root';
$pass = '';
$db_name = 'retailer database system';
$conn_error = 'could not connect.';
if(!@mysql_connect($host_name,$username,$pass) || !@mysql_select_db($db_name) )
{
	die($conn_error);
}




?>