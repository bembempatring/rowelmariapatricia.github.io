<?php include('db.php');
// Insert data into the database
if (isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    $sql = "INSERT INTO items (brand, item, price, quantity) VALUES ('$brand', '$item', '$price', '$quantity')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view2.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="style/style.css">
    <title></title>

</head>
<body>


    <h2>Items to Buy</h2>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Brand:<br>
      <input type="text" name="brand"><br>
      Type of Item:<br>
      <input type="text" name="item"><br>
      Price:<br>
      <input type="text" name="price"><br>
      Quantity:<br>
      <input type="text" name="quantity"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view2.php">BACK </a> 
<?php

?>

      <style type="text/css">
    input[type=text] {
   width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  align-content: center;
}  

</body>
</html>
