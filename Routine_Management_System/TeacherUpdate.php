<?php
$sname = $_POST['sname'];
$name = $_POST['name'];
$sname1 = $_POST['sname1'];
$dept = $_POST['dept'];
$desg = $_POST['desg'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$credit = $_POST['credit'];

if(!empty($sname) || !empty($name) || !empty($sname1) || !empty($dept) || !empty($desig) || !empty($contact) || !empty($email) || !empty($credit))
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "routine";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "update teacher set name = '".$_POST["name"]."',
						   short_name = '".$_POST["sname1"]."',
						   dept = '".$_POST["dept"]."',
						   designation = '".$_POST["desg"]."',
						   contact_no = '".$_POST["contact"]."',
						   email = '".$_POST["email"]."',
						   credit = '".$_POST["credit"]."' 
						   where short_name = '".$_POST["sname"]."' ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'AdTeacher.php';

$conn->close();
}
?>