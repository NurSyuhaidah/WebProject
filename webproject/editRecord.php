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

    $bil=$_REQUEST['bil'];
    $query = "SELECT * from competition where bil='".$bil."'"; 
    $result = mysqli_query($conn, $query) or die ( mysqli_error());
    $row = mysqli_fetch_assoc($result);
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">

<h1>Update Record</h1>

<div>
<form name="form" method="post" action="updateRecord.php"> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" value="<?php echo $row['custName'];?>" /></p>
<p><input type="text" name="contact" value="<?php echo $row['custContact'];?>" /></p>
<p><input type="text" name="email" value="<?php echo $row['custEmail'];?>" /></p>
<p><input type="text" name="order" value="<?php echo $row['custOrder'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>

</div>
</div>
</body>
</html>