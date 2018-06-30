<html>
<head>
	<link rel="stylesheet" href="style/style.css" />
</head>
<body>
<div id="main">
<div id="header">
<div id="logo">
<div id="logo_text"><!-- class="logo_colour", allows you to change the colour of the text -->
<h1><a href="homme.html"><span class="logo_colour">Nicro Accounts</span></a></h1>
<h2>Online Retail Database Management System</h2>
</div>
</div>
<div id="menubar">
<ul id="menu">
<li><a href="home.html">Home</a></li>
<li><a href="bill.html">Bill &amp; Order</a></li>
<li><a href="stock.php">Current Stock</a></li>
<li><a href="customer.php">Customer &amp; Supplier</a></li>
<li class="selected"><a href="balance.php">Balance Sheet &amp; Staff list</a></li>
</ul>
</div>
</div>
<div id="site_content">
<div id="content"><!-- insert the page content here -->
<h1>Staff List</h1>



<?php


require 'connect.inc.php';

$query = "SELECT * FROM `staff` ";
if($query_run = mysql_query($query)){
	$i = 0;
	echo '<table border = "1">
	<tr><td>Staff id</td> 
	<td> Name </td>
	<td> DOB </td> 
	<td> Sex </td> 
	<td>   Address </td> 
	<td>  phone no.</td>';
	while ($query_row = mysql_fetch_assoc($query_run)) {
		$i++;
		# code...
		$staff_id = $query_row['staff_id'];
		$name = $query_row['name'];
		$dob = $query_row['dob'];
		$sex = $query_row['sex'];
		$address = $query_row['address'];
		$phone = $query_row['phone_no'];
		echo "<tr>
		<td>".$staff_id."</td>
		<td>".$name."</td>
		<td>".$dob."</td>
		<td>".$sex."</td>
		<td>".$address."</td>
		<td>".$phone."</td></tr>";
	}
	echo "</table>";
}
else
{
	echo mysql_error();
}
?>


<h1>Balance Sheet</h1>



<?php  

require 'connect.inc.php';


$query = "SELECT  product.product_name as a ,order_detail.quantity as b, product.customer_price as c,product.supplier_price as d 
FROM `order_detail`,`product`
WHERE product.product_name=order_detail.product_name";

if($query_run = mysql_query($query)){
	echo "<table border='1'>";
	echo '<tr>
	<td>Product name</td>  
	<td>Quantity</td>
	<td>Customer price</td>
	<td>Supplier price</td>
	<td>Profit</td>
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
WHERE product.product_name=order_detail.product_name";

if($query_run = mysql_query($query)){
	while ($query_row = mysql_fetch_assoc($query_run)) 
	{
		$total = $query_row['total'];
		echo "<br><h2>Total profit: ".$total.'</h2>';
	}
}
else
{
	echo mysql_error();
}
?>



<h1>Contact Us</h1>
<p>Below is an example of how a contact form might look with this template:</p>
<form action="" method="post">
<div class="form_settings">
<p>Name<br><input class="contact" name="your_name" type="text" value="" /></p>
<p>Email Address<br><input class="contact" name="your_email" type="text" value="" /></p>
<p>Message<br><textarea class="contact textarea" cols="50" name="your_enquiry" rows="8"></textarea></p>

<p style="padding-top: 15px;">&nbsp;<input class="submit" name="contact_submitted" type="submit" value="submit" /></p>
</div>
</form>
<p><br /><br />NOTE: A contact form such as this would require some way of emailing the input to an email address.</p>
</div>
</div>
<div id="content_footer">&nbsp;</div>
<div id="footer">
<p><a href="home.html">Home</a> |<a href="bill.html">Bill &amp; Order</a>|<a href="stock.php">Current Stock</a>|<a href="customer.php">Customer &amp; Supplier</a>| <a href="balance.php">Balance Sheet &amp; Staff list</a></p>
</div>
</div>
</body>
</html>