<?php
$name = $_POST['name'];
$title = $_POST['title'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
$dept = $_POST['dept'];
$desgn = $_POST['desgn'];
$email = $_POST['email'];
$phn = $_POST['phn'];



if(!empty($name) || !empty($title) || !empty($pass) || !empty($repass) || !empty($desgn) || !empty($dept)|| !empty($email)|| !empty($phn))
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "routine1";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if($pass != $repass){
	die("Password did not match" . $conn->connect_error);
}

$sql = "INSERT INTO t_registration
VALUES ('".$_POST["name"]."','".$_POST["title"]."','".$_POST["pass"]."','".$_POST["dept"]."','".$_POST["desgn"]."','".$_POST["email"]."','".$_POST["phn"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'MainS.html';

$conn->close();
}
?>