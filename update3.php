<?php include('db.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $address = $_POST['address'];
    $item = $_POST['item'];
    $amount = $_POST['amount'];

    $sql = "UPDATE location SET address= '$address', item='$item', amount='$amount' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view3.php';</script>";
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
<h2>DELIVERY</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM location WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  Address: </h4>
  <input type="text" name="address" value="<?php echo $row['address']?>">
<h4>  Type of Item: </h4>
  <input type="text" name="item" value="<?php echo $row['item'] ?>">
<h4>  Amount to Pay: </h4>
  <input type="text" name="amount" value="<?php echo $row['amount'] ?>">
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