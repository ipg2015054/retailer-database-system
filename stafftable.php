
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
		$staff_id = $query_row['staff id'];
		$name = $query_row['name'];
		$dob = $query_row['dob'];
		$sex = $query_row['sex'];
		$address = $query_row['address'];
		$phone = $query_row['phone no'];
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