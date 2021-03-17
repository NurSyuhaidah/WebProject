<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multimedia";
   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); }

    extract($_POST);

    // Attempt update query execution
    $sql = "UPDATE competition SET custName='".$name."',
    custContact='".$contact."', custEmail='".$email."',WHERE id='".$id."'";

    if(mysqli_query($conn, $sql)){
        echo "Records were updated successfully.</br></br>
        <a href='deliveryList.php'>View Updated Record</a>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
     
    // Close connection
    mysqli_close($conn);
    ?>