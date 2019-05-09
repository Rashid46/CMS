<?php
$sname = $_POST['sname'];
if(!empty($sname) )
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

$sql = "Delete from teacher where short_name = '$sname'";
if ($conn->query($sql) === TRUE) {
	$sql = "DROP TABLE $sname";
	if ($conn->query($sql) === TRUE) echo("Teacher deletion complete");
	else $conn->error;
} 

else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'AdTeacher.php';

$conn->close();
}
?>