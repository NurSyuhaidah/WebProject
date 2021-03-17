<html>
<head>
 <title>Customer's Order</title>
</head>
<body>
 <h3 align="center">Customer's Order</h3>

<?php
 $servername = "localhost"; //Host Name
 $username = "root"; //MySQL Username
 $password = ""; //MySQL Password
 $dbname = "multimedia"; //Database Name

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
 echo '<table cellpadding=10 cellspacing=0 border=1 align="center">';
 echo '<tr><td align="center"><b>No</b></td>
 <td align="center"><b>Customer Name</b></td>
 <td align="center"><b>Customer Contact</b></td>
 <td align="center"><b>Customer Email</b></td>
 <td align="center"><b>Address</b></td>
 <td align="center"><b>Order</b></td>
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

 echo '</tr>';
 }
 } 
 else {
 echo "0 results"; //if no record found in the database
 }
 //close connection 
 $conn->close();
 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body>
</html>