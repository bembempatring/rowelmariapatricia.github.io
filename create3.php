<?php include('db.php');
// Insert data into the database
if (isset($_POST['submit'])) {
    $address = $_POST['address'];
    $item = $_POST['item'];
    $amount = $_POST['amount'];
    
    $sql = "INSERT INTO location (address, item, amount) VALUES ('$address', '$item', '$amount')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view3.php';</script>";
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


    <h2>DELIVERY</h2>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      Address:<br>
      <input type="text" name="address"><br>
      Type of Item:<br>
      <input type="text" name="item"><br>
      Amount to Pay:<br>
      <input type="text" name="amount"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view3.php">BACK </a> 
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
