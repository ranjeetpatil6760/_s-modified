<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "friendbook";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
	die("connection failed:" .$conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
if ((isset($email) && !empty($email)) &&
   (isset($password) && !empty($password)))

 {
	$sql = "SELECT email,password FROM signup WHERE email = '$email' and password = '$password' ";
		$result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
      	  while ($row = $result->fetch_assoc()) {
      	  	//echo $row["email"];
      	  	 header('Location:welcome.php');
      	  }
      }else
      {
      	//echo "0 results";
      	 header('Location:login.html');
      }
  }    
	

$conn->close();

 ?>