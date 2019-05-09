<?php
$code = $_POST['code'];
if(!empty($code) )
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

$sql = "Delete from course where Code = '$code'";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'AdCourse.php';

$conn->close();
}
?>