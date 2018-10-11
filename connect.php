<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "friendbook";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connectionss
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
$device = $_REQUEST['device'];
$watt = $_REQUEST['watt'];
$quantity = $_REQUEST['quantity'];
$total = $_REQUEST['total'];

$sql = "INSERT INTO power (device, watt, quantity,total)
VALUES ('$device', '$watt', '$quantity','$total')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
echo '<script type="text/javascript">
           window.location = "calc.php";
      </script>';
?>