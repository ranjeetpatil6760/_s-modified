<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "friendbook";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
}
/*echo "<pre/>";
print_r($_POST);
die();*/
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$email = $_POST['email'];
$password = $_POST['password'];

if ( (isset($firstname) && !empty($firstname)) && 
	((isset($lastname) && !empty($lastname))) && 
	((isset($phone) && !empty($phone))) && 
	((isset($city) && !empty($city))) && 
	((isset($email) && !empty($email))) && 
	((isset($password) && !empty($password)
	)) ){
	
	$stmt = $conn->prepare("INSERT INTO signup(firstname,lastname,phone,city,email,password) VALUES(?,?,?,?,?,?)");
    $stmt->bind_param("ssisss",$firstname,$lastname,$phone,$city,$email,$password);

    $firstname = "$firstname";
    $lastname = "$lastname";
    $phone = "$phone";
    $city = "$city";
    $email = "$email";
    $password = "$password";
    $stmt->execute();
    echo "Added Successfully";
    $stmt->close();
    header('Location:login.html');
    
} else {
	echo "Not set";
}
$conn->close();
 ?>}
