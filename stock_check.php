<?php


require 'connect.inc.php';

$query = "SELECT `product name`,`in_stock` FROM `product` ";
if($query_run = mysql_query($query)){
	$i = 0;
	echo "<table border='1'>";
	echo '<tr>
	<td>S.no.</td>  
	<td>product_name</td>
	<td>quantity</td>
	</tr>';
	while ($query_row = mysql_fetch_assoc($query_run)) {
		$i++;
		# code...
		$product_name = $query_row['product name'];
		$quantity = $query_row['in_stock'];
		echo '<tr>
		<td>'.$i.'</td>
		<td>'.$product_name.'</td>
		<td>'.$quantity.'</td>	
		</tr>'; 
	}
	echo '</table>';
}
else
{
	echo mysql_error();
}
?>