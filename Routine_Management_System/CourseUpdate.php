<?php
$code = $_POST['code'];
$code1 = $_POST['code1'];
$dept = $_POST['dept'];
$title = $_POST['title'];
$type = $_POST['type'];
$credit = $_POST['credit'];
$semester = $_POST['semester'];



if(!empty($code) || !empty($code1) || !empty($dept) || !empty($title) || !empty($type) || !empty($credit) || !empty($semester))
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

$sql = "update course set Code = '".$_POST["code1"]."',
						   title = '".$_POST["title"]."',
						   dept = '".$_POST["dept"]."',
						   type = '".$_POST["type"]."',
						   semester = '".$_POST["semester"]."',
						   credit = '".$_POST["credit"]."' 
						   where code = '".$_POST["code"]."' ";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'AdCourse.php';

$conn->close();
}
?>