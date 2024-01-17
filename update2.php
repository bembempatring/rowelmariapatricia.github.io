<?php include('db.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $brand = $_POST['brand'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE items SET brand= '$brand', item='$item', price='$price', quantity='$quantity' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view2.php';</script>";
       }  else {
        echo "<script>alert('SOMETHING WENT WRONG!');</script>";

    }

}
}



?> 

<html>
<head>  
<link rel="stylesheet" type="text/css" href="style/style.css">


</head>


<body>
<h2>Items to Buy</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM items WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Brand: </h4>
  <input type="text" name="brand" value="<?php echo $row['brand']?>">
<h4>  Type of Item: </h4>
  <input type="text" name="item" value="<?php echo $row['item'] ?>">
<h4>  Price: </h4>
  <input type="text" name="price" value="<?php echo $row['price'] ?>">
<h4>  Quantity: </h4>
  <input type="text" name="quantity" value="<?php echo $row['quantity'] ?>">
<?php
 }
}  ?>
 <p> <input type="submit" name="update" value="Update User"></p> 
</form> 
    
<style type="text/css">
  
table {
  border: 5px dotted #B36C6C;
}




</style>


</style>
</body>
</html>