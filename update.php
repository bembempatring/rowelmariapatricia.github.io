<?php include('db.php');
// update records in database
if(isset($_POST['update'])){
    if(isset($_GET['user_id'])){
    $id = $_GET['user_id'];

    $first_name = $_POST['first_name'];
    $middle_initial = $_POST['middle_initial'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];

    $sql = "UPDATE customer SET first_name='$first_name', middle_initial='$middle_initial', last_name='$last_name', age='$age', sex='$sex', contact_number='$contact_number', email='$email' WHERE ID= $id";
 
if ($conn->query($sql) === TRUE) {
  echo "<script>alert('You have succesfully update the record!');</script>";
         echo "<script>document.location='view.php';</script>";
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
<h2>Customer Information</h2>

<form method="post" >
<?php 
  if(isset($_GET['user_id']))
     {
         $userid= $_GET['user_id'];
$sql= mysqli_query($conn, "SELECT * FROM customer WHERE ID = $userid");

while ($row = mysqli_fetch_array($sql)) {
?>
<h4>  First Name: </h4>
  <input type="text" name="first_name" value="<?php echo $row['first_name']?>">
<h4>  Middle Initial: </h4>
  <input type="text" name="middle_initial" value="<?php echo $row['middle_initial'] ?>">
<h4>  Last Name: </h4>
  <input type="text" name="last_name" value="<?php echo $row['last_name'] ?>">
<h4>  Age: </h4>
  <input type="text" name="age" value="<?php echo $row['age'] ?>">
<h4>  Contact Number: </h4>
  <input type="text" name="contact_number" value="<?php echo $row['contact_number'] ?>">
<h4>  Email: </h4>
  <input type="text" name="email" value="<?php echo $row['email'] ?>">
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