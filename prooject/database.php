<?php

$servername = "localhost";
$usernamee = "root";
$password = "";
$dbname = "harsh";
//connection
$username=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];


// Create connection
$conn = new mysqli($servername, $usernamee, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `db`(`name`, `email`, `phone`) VALUES ('$username','$email','$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
 
$conn->close();
?>