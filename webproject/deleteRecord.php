<html>
<head>
 <title>Record Delete </title>
</head>
<body>
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
 //get input value
 $adName=$_POST['custName'];
 // sql to delete a record
 $sql = "DELETE FROM competition WHERE custName='$adName'";
 if ($conn->query($sql) === TRUE) {
 echo "Record deleted successfully";
 } 
 else {
 echo "Error deleting record: " . $conn->error;
 }
 //close connection 
 $conn->close();
 echo '<p><a href="adminMenu.php">Back to Main Menu</a></p>';
?>
</body> 
</html>
