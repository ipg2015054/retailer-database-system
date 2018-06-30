<?php


require 'connect.inc.php';

$query = "SELECT * FROM `customer` ";
if($query_run = mysql_query($query)){
	echo '<table border = "1">
	<tr><td>customer id</td> 
	<td> Name </td>
	<td>   Address </td> 
	<td>  phone no.</td>
	<td>  email</td>';
	while ($query_row = mysql_fetch_assoc($query_run)) {
		$cust_id = $query_row['customer id'];
		$name = $query_row['name_c'];
		$address = $query_row['address'];
		$phone = $query_row['phone no'];
		$email = $query_row['email'];
		echo "<tr>
		<td>".$cust_id."</td>
		<td>".$name."</td>
		<td>".$address."</td>
		<td>".$phone."</td>
		<td>".$email."</td>
		</tr>";
	}
	echo "</table>";
}
else
{
	echo mysql_error();
}
?>