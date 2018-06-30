<?php


require 'connect.inc.php';

$query = "SELECT * FROM `supplier` ";
if($query_run = mysql_query($query)){
	echo '<table border = "1">
	<tr><td>supplier id</td> 
	<td> Name </td>
	<td>   Address </td> 
	<td>  phone no.</td>
	<td>  email</td>
	<td> pay method</td>';
	while ($query_row = mysql_fetch_assoc($query_run)) {
		$supp_id = $query_row['Supplier ID'];
		$name = $query_row['Name'];
		$address = $query_row['Address'];
		$phone = $query_row['Phone No.'];
		$email = $query_row['E Mail'];
		$pay = $query_row['Pay Method'];
		echo "<tr>
		<td>".$supp_id."</td>
		<td>".$name."</td>
		<td>".$address."</td>
		<td>".$phone."</td>
		<td>".$email."</td>
		<td>".$pay."</td>
		</tr>";
	}
	echo "</table>";
}
else
{
	echo mysql_error();
}
?>