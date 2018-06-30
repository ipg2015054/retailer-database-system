<head>
  <link rel="stylesheet" href="style/style.css" />
</head>
<div id="main">
  <div id="header">
    <div id="logo">
      <div id="logo_text">
        <!-- class="logo_colour", allows you to change the colour of the text -->
        <h1><a href="homme.html"><span class="logo_colour">Nicro Accounts</span></a></h1>
        <h2>Online Retail Database Management System</h2>
      </div>
    </div>
    <div id="menubar">
      <ul id="menu">
        <li><a href="home.html">Home</a></li>
        <li><a href="bill.html">Bill &amp; Order</a></li>
        <li><a href="stock.php">Current Stock</a></li>
        <li class="selected"><a href="customer.php">Customer &amp; Supplier</a></li>
        <li><a href="balance.php">Balance Sheet &amp; Staff list</a></li>
      </ul>
    </div>
  </div>
  <div id="site_content">

    <div id="content">
      <!-- insert the page content here -->
      <div class="form_settings">
        <h2>View Customer</h2>
        <form action="#a"><input class="submit" name="name" type="submit" value="View Customer" /></form>
        <br>
        <br>
        <br>
        <h2>New Customer Application Form</h2>
        <form action="customer_add.php" method="GET">

          <p>Customer Name&nbsp;
            <input name="name" type="text" value="" />&nbsp;</p>
          <p>Mobile Number &nbsp;&nbsp;
            <input name="number" type="text" value="" />&nbsp; &nbsp;</p>
          <p>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <input name="address" type="text" value="" />&nbsp;</p>
          <p>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
            <input name="email" type="text" value="" />&nbsp;</p>
          <p style="padding-top: 15px;">&nbsp;
            <input class="submit" name="submit" type="submit" value="Create Customer" />
          </p>
          </form>
          <h1>&nbsp;</h1>
          <h2>View Supplier</h2>
          <form action="#b"><input class="submit" name="name" type="submit" value="View Supplier" /></form>
          
          <br>
          <br>
          <br>
          <form action="supplier_add.php" method="GET">
          <h2>New Supplier Application Form</h2>
          <div class="form_settings">&nbsp;</div>
          <p>Supplier Name &nbsp;
            <input name="name1" type="text" value="" />
          </p>
          <p>Mobile Number &nbsp;
            <input name="number1" type="text" value="" />&nbsp;</p>
          <p>Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input name="address1" type="text" value="" />&nbsp;</p>
          <p>Email &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            <input name="email1" type="text" value="" />
          </p>
          <p>Pay Method &nbsp; &nbsp; &nbsp;&nbsp;
            <input name="pay" type="text" value="" />
          </p>
          <p style="padding-top: 15px;">&nbsp;
            <input class="submit" name="submit" type="submit" value="Create Supplier" />
          </p>
          <div id= "a">
        <h2>Customer list</h2><br><hr>
          <?php


require 'connect.inc.php';

$query = "SELECT * FROM `customer` ";
if($query_run = mysql_query($query)){
  echo '<table border = "1">
  <tr><td>customer_id</td> 
  <td> Name </td>
  <td>   Address </td> 
  <td>  phone_no.</td>
  <td>  email</td>';
  while ($query_row = mysql_fetch_assoc($query_run)) {
    $cust_id = $query_row['customer_id'];
    $name = $query_row['name_c'];
    $address = $query_row['address'];
    $phone = $query_row['phone_no'];
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



      </div>
      <div id="b">
        <h2>Supplier list</h2>
        <br><hr>
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

      </div>
      </form>
      
      
      </div>
    </div>
  </div>
</div>
<div id="content_footer">&nbsp;</div>
<div id="footer">
<p><a href="home.html">Home</a> |<a href="bill.html">Bill &amp; Order</a>|<a href="stock.php">Current Stock</a>|<a href="customer.php">Customer &amp; Supplier</a>| <a href="balance.php">Balance Sheet &amp; Staff list </a></p>
</div>
</div>