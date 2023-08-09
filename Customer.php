<?php 
include ("db.php");



if (isset($_POST['grocery_stores'])) {

  $customer_id = $_POST['customer_id'];
  $Name = $_POST ['Name'];
  $phoneNo = $_POST ['phoneNo'];
  $address = $_POST ['address'];


if(!empty($customer_id) && !empty($Name) && !empty($phoneNo) && !empty ($address) ) {

   $sql = "INSERT INTO `customer` (`customer_id`, `Name`, `phoneNo`, `address`)
                        VALUES ('$customer_id', '$Name', '$phoneNo', '$address')";

   $qry = mysqli_query($db, $sql);
if ($qry) {
   echo "inserted successfully";
}


} else {
   echo "all fields must be filled";

}

}

?>

<!DOCTYPE html>
<html>
   
   <head>
      
      <title>customer</title>
      
      
   </head>
   
 <style type="text/css">

       </style>
   
   <body style="background-image:url(https://dalziel-pow.imgix.net/Supermarket-illustration-09.png?auto=compress%2Cformat&fit=clip&position=50%2050&w=900&s=6ac48a01d5a53f7a7fa769d50e5c97b7);
    
 ">
     <h1>CUSTOMER</h1>
    
      
     
   
      <form action="" method="POST"  style="position: relative;
    left: 518px;
    top: 110px;]
    box-sizing:border-box;
    border:5px solid black;
    width:300px;
    padding:100px;
    background-color: 	#ADD8E6;

    ">
    

   <label>ID:
         <input type= "text" name="customer_id">
         </label><br><br>

         <label>Name: 
         <input type = "text" name="Name">
         </label><br> <br>

         <label>PhoneNo:
         <input type = "text" name="phoneNo">
         </label><br> <br>

         <label>Address: 
         <input type = "text" name="address">
         </label><br> <br>

         <label>
         <input type = "submit" name="grocery_stores" value="INSERT">
         </label>
         
      </form>
   
 
   
      
      </body>
</html>


