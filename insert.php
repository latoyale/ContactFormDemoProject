<?php
$servername = "localhost";
$username = 'root';
$password = 'root';
$dbname = 'contactform';

$fname = $_POST['fname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$subject= $_POST['subject'];
$message= $_POST['message'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `contacts` (`fname`, `email`, `telephone`, `subject`, `message`) VALUES ('$fname', '$email', '$telephone', '$subject', '$message')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>