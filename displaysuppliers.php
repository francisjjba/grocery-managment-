<?php

include ("db.php");

?>


<!DOCTYPE html>

<html>

<head>

 <title></title>


<H1>UPDATE SUPPLIES</H1>
 <style type="text/css">
body{
    background-image:url(https://previews.123rf.com/images/elenavdovina/elenavdovina2004/elenavdovina200400034/145143362-food-seamless-pattern-light-blue-contour-grocery-store-vector-food-and-drinks-production-and-sale-ve.jpg);
   background-size:auto;
}
table {

    border:5px solid black;
 background-color:  	#B0E0E6;


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

$sel = "SELECT * FROM `supplier` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $supplier_id  =  $row['supplier_id'];

 $product_id  =  $row['product_id'];

 $name  =  $row['name'];

 $date  =  $row['date'];

 $quantity  =  $row['quantity'];

 $phoneNo =  $row['phoneNo'];

 $address =  $row['address'];

 echo "<tr><td>".$supplier_id."</td><td>".$product_id."</td><td>".$name."</td><td>".$date."</td><td>".$quantity."</td><td>".$phoneNo."</td><td>".$address."</td><td><a href='editsupplier.php?edit=$supplier_id' >Edit</a></td><td><a href='deletesupplier.php?deletesupplier_id=$supplier_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>