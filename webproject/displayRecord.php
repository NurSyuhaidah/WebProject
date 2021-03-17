<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "multimedia";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  } 
  


  //create and execute query
  $sql = "SELECT * FROM competition";
  $result = $conn->query($sql);

  //check if records were returned
  if ($result->num_rows > 0) {

 //create a table to display the record
 echo 'Selected record as the following: <br><br>';
 echo '<p><table cellpadding=10 cellspacing=0 border=1 align="center">';
 echo '<tr><td align="center"><b>No</b></td>
 <td align="center"><b>Customer Name</b></td>
 <td align="center"><b>Customer Contact</b></td>
 <td align="center"><b>Customer Email</b></td>
 <td align="center"><b>Address</b></td>
 <td align="center"><b>Order</b></td>
 <td align="center">&nbsp&nbsp</td>
 </tr>';
 
 // output data of each row
 while($row = $result->fetch_assoc()) {
 echo '<tr>';
 echo '<td align="center">'.$row["Bil"].'</td>';
 echo '<td align="center">'.$row["custName"].'</td>';
 echo '<td align="center">'.$row["custContact"].'</td>';
 echo '<td align="center">'.$row["custEmail"].'</td>';
 echo '<td align="center">'.$row["address"].'</td>';
 echo '<td align="center">'.$row["custOrder"].'</td>';
 ?>

<td><a href="editRecord.php?id=<?php echo $row["Bil"]; ?>">UPDATE</a></td></tr>
<?php

 echo '</tr>';
 }
 echo '</table></p>';
 } 
 else {
 echo '<font color=red>No record found';
 }
 //close connection 
 $conn->close();
?>