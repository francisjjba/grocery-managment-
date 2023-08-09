<?php

include ("db.php");

?>


<!DOCTYPE html>

<html>

<head>

 <title></title>

UPDATE PRODUCT

 <style type="text/css">

body{
    background-image:url(https://c8.alamy.com/comp/2BYDJ9F/bags-and-boxes-with-grocery-products-icon-set-over-white-background-detailed-style-vector-illustration-2BYDJ9F.jpg);
   background-size:auto;
}
table {

border:5px solid black;
 background-color: #FAEBD7;


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

 </style>



</head>

<body>

<table>



<tr>



<?php

$sel = "SELECT * FROM `product` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $product_id  =  $row['product_id'];

 $name =  $row['name'];

 $description  =  $row['description'];

 $price  =  $row['price'];

 $exp_date  =  $row['exp_date'];


 echo "<tr><td>".$product_id."</td><td>".$name."</td><td>".$description."</td><td>".$price."</td><td>".$exp_date."</td><td><a href='editproduct.php?edit=$product_id' >Edit</a></td><td><a href='deleteproduct.php?deleteproduct_id=$product_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>