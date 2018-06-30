

<?php  

require 'connect.inc.php';


$query = "SELECT  product.product_name as a ,order_detail.quantity as b, product.customer_price as c,product.supplier_price as d 
FROM `order_detail`,`product`
WHERE product.product_id=order_detail.product_id";

if($query_run = mysql_query($query)){
	echo "<table border='1'>";
	echo '<tr>
	<td>Product name</td>  
	<td>Quantity</td>
	<td>Customer price</td>
	<td>Supplier price</td>
	<td>Price</td>
	</tr>';
	$sum=0;
	while ($query_row = mysql_fetch_assoc($query_run)) 
	{
		$name = $query_row['a'];
		$quantity = $query_row['b'];
		$cust = $query_row['c'];
		$supp = $query_row['d'];
		$price =0;
		$price  = ($cust - $supp)*$quantity;
		$sum=$sum+$price;

		echo '<tr>
		<td>'.$name.'</td>
		<td>'.$quantity.'</td>
		<td>'.$cust.'</td>
		<td>'.$supp.'</td>
		<td>'.$price.'</td>	
		</tr>';	
	}
	echo '</table>';
}
else
{
	echo mysql_error();
}

$query = "SELECT  sum(order_detail.quantity*(product.customer_price - product.supplier_price)) as total
FROM `order_detail`,`product` 
WHERE product.product_id=order_detail.product_id";

if($query_run = mysql_query($query)){
	while ($query_row = mysql_fetch_assoc($query_run)) 
	{
		$total = $query_row['total'];
		echo "total profit: ".$total;
	}
}
else
{
	echo mysql_error();
}
?>