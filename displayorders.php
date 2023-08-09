<?php

include ("db.php");

?>


<!DOCTYPE html>

<html>

<head>

 <title></title>


<H1>UPDATE ORDERS</H1>

 <style type="text/css">

body{
    background-image:url(https://previews.123rf.com/images/elenavdovina/elenavdovina1807/elenavdovina180700061/106200616-food-seamless-pattern-orange-monochrome-grocery-vector-food-and-drinks-production-and-sale-vector-ba.jpg);
   background-size:auto;
}

table {

 border:5px solid black;
 background-color: 	#EEE8AA;


 border-collapse: collapse;
 position: fixed;
    left: 464px;
    top: 153px;
    width:601px;
    height:131px;
}



td{

 border:1px solid black;

 padding: 10px;

}

a{
    a:link, a:visited {
  background-color: #f44336;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: red;
}
}

 </style>



</head>

<body>

<table>



<tr>



<?php

$sel = "SELECT * FROM `orders` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $order_id  =  $row['order_id'];

 $customer_id  =  $row['customer_id'];

 $product_id  =  $row['product_id'];

 $quantity  =  $row['quantity'];

 $Price  =  $row['Price'];

 $date  =  $row['date'];

 echo "<tr><td>".$order_id."</td><td>".$customer_id."</td><td>".$product_id."</td><td>".$quantity."</td><td>".$Price."</td><td>".$date."</td><td><a href='editorders.php?edit=$order_id' >Edit</a></td><td><a href='deleteorders.php?deleteorder_id=$order_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>