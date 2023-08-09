<?php

include ("db.php");

?>


<!DOCTYPE html>

<html>

<head>

 <title></title>


<H1>CUSTOMER DATABASE</H1>
 <style type="text/css">

table {

 border:5px solid black;
 background-color: 	#FFE4C4;


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

<body style="background-image:url(https://assets.epicurious.com/photos/5ebefe03ac4fe97f75dd2076/master/pass/EPI-AFFORDABLE-COOKING_GROCERYBUDGET_ILLO-V2-01.jpg)">

<table>



<tr>



<?php

$sel = "SELECT * FROM `customer` ";

$qrydisplay = mysqli_query($db, $sel);

while($row = mysqli_fetch_array($qrydisplay)){

 $customer_id  =  $row['customer_id'];

 $Name  =  $row['Name'];

 $phoneNo  =  $row['phoneNo'];

 $address  =  $row['address'];



 echo "<tr><td>".$customer_id."</td><td>".$Name."</td><td>".$phoneNo."</td><td>".$address."</td><td><a href='edit.php?edit=$customer_id' >Edit</a></td><td><a href='delete.php?deletecustomer_id=$customer_id' >Delete</a></td></tr>";





}



?>



</tr>

</table>

</body>

</html>