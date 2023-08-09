<?php 
include ("db.php");


if (isset($_POST['grocery_stores'])) {

  $product_id = $_POST['product_id'];
  $name = $_POST ['name'];
  $description = $_POST ['description'];
  $price = $_POST ['price'];
  $exp_date = $_POST ['exp_date'];



if(!empty($product_id) && !empty($name) && !empty($description) && !empty ($price)  && !empty ($exp_date)) {

   $sql = "INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `exp_date`)
                        VALUES ('$product_id', '$name', '$description', '$price', '$exp_date')";

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
   <body style="background-image:url(https://cdn3.vectorstock.com/i/1000x1000/77/07/supermarket-products-seamless-pattern-vector-19477707.jpg)">
      <form action="" method="POST" 
      style="position:relative;
    left: 534px;
    top: 178px;
    box-sizing:border-box;
    border:5px solid black;
    width: 472px;
    padding:100px;
    background-color:lightgrey;
    ;
   
   
    ">

      
         <label>Product_id:
         <input type= "text" name="product_id">
         </label><br><br>

         <label>Product_Name: 
         <input type = "text" name="name">
         </label><br> <br>

         <label>Description:
         <input type = "text" name="description">
         </label><br> <br>

         <label>Price: 
         <input type = "text" name="price">
         </label><br> <br>

         <label>Expiry-date: 
         <input type = "text" name="exp_date">
         </label><br> <br>

         <label>
         <input type = "submit" name="grocery_stores" value="INSERT">
         </label>

      </form>
      </body>
</html>