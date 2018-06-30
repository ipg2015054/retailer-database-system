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
        <li class="selected"><a href="stock.php">Current Stock</a></li>
        <li><a href="customer.php">Customer &amp; Supplier</a></li>
        <li><a href="balance.php">Balance Sheet &amp; Staff list</a>
        </li>
      </ul>
    </div>
  </div>
  <div id="site_content">

    <div id="content">




    <br>
        <br>
        
      <!-- insert the page content here -->
      <h1>Current Stock</h1>
      <h3>Current stock shows real time details of all products.</h3>

      <?php


require 'connect.inc.php';

$query = "SELECT `product_name`,`in_stock` FROM `product` ";
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
    $product_name = $query_row['product_name'];
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
    <div class="form_settings">
        <h2>Update Product detail Form</h2>
        <form action="add_product.php" method="GET">

          <h4>ADD New Product &nbsp;</h4><br>
          <p>New Product Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="pname" type="text" value="" />&nbsp;&nbsp;&nbsp;</p><br>
            <p>Customer Selling Price&nbsp;&nbsp;
            <input name="cprice" type="text" value="" />&nbsp;</p><br>
            <p>Supplier Selling Price&nbsp;&nbsp;&nbsp;&nbsp;
            <input name="sprice" type="text" value="" />&nbsp;</p><br>

          <p>Quantity &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input size="8" name="quantity" type="text" value="" />&nbsp; &nbsp;</p><br>
              <p>Supplier id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input size="8" name="sid" type="text" value="" />&nbsp; &nbsp;</p>        
               <p style="padding-top: 15px;">&nbsp;
            <input class="submit" name="submit" type="submit" value="ADD New Product" />
          </p></form>
          </div>


    </div>
  </div>
  <h3 id="content_footer">&nbsp;</h3>
  <div id="footer">
    <p><a href="home.html">Home</a> |<a href="bill.html">Bill &amp; Order</a>|<a href="stock.php">Current Stock</a>|<a href="customer.php">Customer &amp; Supplier</a>| <a href="balance.php">Balance Sheet &amp; Staff list</a></p>
  </div>
</div>
