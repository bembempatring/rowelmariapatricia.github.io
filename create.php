<?php include('db.php');
// Insert data into the database
if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $middle_initial = $_POST['middle_initial'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO customer (first_name, middle_initial, last_name, age, sex, contact_number, email) VALUES ('$first_name', '$middle_initial', '$last_name', '$age', '$sex', '$contact_number', '$email')";
    
    if (mysqli_query($conn, $sql)) {
        
        echo "<script>alert('You have succesfully added the User!');</script>";
         echo "<script>document.location='view.php';</script>";
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


    <h2>Customer Information</h2>

    <form  method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      First Name:<br>
      <input type="text" name="first_name"><br>
      Middle Initial:<br>
      <input type="text" name="middle_initial"><br>
      Last Name:<br>
      <input type="text" name="last_name"><br>
      Age:<br>
      <input type="text" name="age"><br>
      Sex:<br>
      <input type="text" name="sex"><br>
      Contact Number:<br>
      <input type="text" name="contact_number"><br>
      Email:<br>
      <input type="text" name="email"><br>
      <input type="submit" name="submit" value="Submit">
      <a href="view.php">BACK </a> 
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
