<?php 
include('db.php');

// Retrieve data from the database
$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> Customer Information </h1> ";

     echo "<a href='create.php'>CREATE USER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> ID </th> 
    <th> First Name </th>
    <th> Middle Initial </th> 
    <th> Last Name </th> 
    <th> Age </th> 
    <th> Sex </th>
    <th> Contact Number </th>
    <th> Email </th> 
    <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['ID'];                

         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["first_name"]. "</td> 
         <td> " . $row["middle_initial"]. "</td>
         <td> " . $row["last_name"]. "</td> 
         <td>" . $row["age"]. "</td>
         <td>" . $row["sex"]. "</td>
         <td>" . $row["contact_number"]. "</td>
         <td> " . $row["email"]. "</td>";

        echo "<td><a href='update.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete.php?user_id=$id'</a>DELETE</td>"; 


        echo "</tr>";    

    }
        echo "</table>"; 
} else {
    echo "0 results";
} 
?>
<style>
table{
    font-size:  20px;
    font-family:    fantasy ;
            
}
table {
  border: 5px dotted #B36C6C;
}

</style>


