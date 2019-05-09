<?php
$code = $_POST['code'];
$title = $_POST['title'];
$credit = $_POST['credit'];
$type = $_POST['type'];
$semester = $_POST['semester'];
$dept = $_POST['dept'];

if(!empty($code) || !empty($dept) || !empty($title) || !empty($semester) || !empty($type) || !empty($credit))
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

$sql = "INSERT INTO course
VALUES ('".$_POST["code"]."','".$_POST['title']."','".$_POST["credit"]."','".$_POST["type"]."','".$_POST["semester"]."','".$_POST["dept"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'AdCourse.php';

$conn->close();
}
?>