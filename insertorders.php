<?php 
include ("db.php");


if (isset($_POST['grocery_stores'])) {

  $order_id = $_POST['order_id'];
  $customer_id = $_POST ['customer_id'];
  $product_id = $_POST ['product_id'];
  $quantity = $_POST ['quantity'];
  $Price = $_POST ['Price'];
  $date = $_POST ['date'];


if(!empty($order_id) && !empty($customer_id) && !empty($product_id) && !empty ($quantity) && !empty ($Price) && !empty ($date)) {

   $sql = "INSERT INTO `orders` (`order_id`, `customer_id`, `product_id`, `quantity`, `Price`, `date`)
                        VALUES ('$order_id', '$customer_id', '$product_id', '$quantity', '$Price', '$date')";

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
      <title></title>
   </head>
   <H1>ORDERS</H1>
   <body style="background-image:url(https://media.istockphoto.com/vectors/seamless-pattern-supermarket-grocery-store-food-drinks-vegetables-vector-id1173579665)">
      <form action="" method="POST" style="position: relative;
    left: 524px;
    top: 148px;
    box-sizing:border-box;
    border:5px solid black;
    width: 472px;
    padding:100px;
    background-color:#DCDCDC;
    ;
    
   
   
    ">

      
         <label>Order_id:
         <input type= "text" name="order_id">
         </label><br><br>

         <label>Customer_id: 
         <input type = "text" name="customer_id">
         </label><br> <br>

         <label>Product_id:
         <input type = "text" name="product_id">
         </label><br> <br>

         <label>Quantity: 
         <input type = "text" name="quantity">
         </label><br> <br>

         <label>Price: 
         <input type = "text" name="Price">
         </label><br> <br>

         <label>Date: 
         <input type = "text" name="date">
         </label><br> <br>

         <label>
         <input type = "submit" name="grocery_stores" value="INSERT">
         </label>

      </form>
      </body>
</html>