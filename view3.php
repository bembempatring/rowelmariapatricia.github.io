<?php 
include('db.php');

// Retrieve data from the database
$sql = "SELECT * FROM location";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

     echo "<h1> DELIVERY </h1> ";

     echo "<a href='create3.php'>CREATE USER </a>";

   echo "<table border =  '1' width = '50%'><tr><th> ID </th> 
    <th> Address </th>
    <th> Type of Item </th> 
    <th> Amount to Pay </th>   
    <th colspan = '2'> Action</th> </tr>";    
    while($row = mysqli_fetch_assoc($result)) {

                $id = $row['ID'];                

         echo "<tr>  
          <td>" . $row["ID"]. "</td> 
         <td>" . $row["address"]. "</td> 
         <td> " . $row["item"]. "</td>
         <td> " . $row["amount"]. "</td>";

        echo "<td><a href='update3.php?user_id=$id'</a>EDIT</td>";    
        echo "<td><a href='delete3.php?user_id=$id'</a>DELETE</td>"; 


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


