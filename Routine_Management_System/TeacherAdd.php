<?php
$sname = $_POST['name'];
$sname = $_POST['sname'];
$dept = $_POST['dept'];
$desg = $_POST['desg'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$credit = $_POST['credit'];

if(!empty($sname) || !empty($dept) || !empty($desig) || !empty($contact) || !empty($email) || !empty($credit))
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

$sql = "INSERT INTO teacher
VALUES ('".$_POST["name"]."','".$_POST['sname']."','".$_POST["dept"]."','".$_POST["desg"]."','".$_POST["contact"]."','".$_POST["email"]."','".$_POST["credit"]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	$statement = $conn->prepare("
 
  create table if not exists $sname (
    day varchar(30) not null,
    period varchar(30) not null,
    course varchar(30),
	Class varchar(10)
  )
 ");

if($statement->execute()==true){
$sql="

  Insert into $sname (day,period)
   VALUES ('Sunday','8.15-9.15'),
   ('Monday','8.15-9.15'),
   ('Tuesday','8.15-9.15'),
   ('Wednesday','8.15-9.15'),
   ('Thursday','8.15-9.15'),
   ('Sunday','9.20-10.20'),
   ('Monday','9.20-10.20'),
   ('Tuesday','9.20-10.20'),
   ('Wednesday','9.20-10.20'),
   ('Thursday','9.20-10.20'),
   ('Sunday','10.25-11.25'),
   ('Monday','10.25-11.25'),
   ('Tuesday','10.25-11.25'),
   ('Wednesday','10.25-11.25'),
   ('Thursday','10.25-11.25'),
   ('Sunday','11.45-12.45'),
   ('Monday','11.45-12.45'),
   ('Tuesday','11.45-12.45'),
   ('Wednesday','11.45-12.45'),
   ('Thursday','11.45-12.45'),
   ('Sunday','12.50-01.50'),
   ('Monday','12.50-01.50'),
   ('Tuesday','12.50-01.50'),
   ('Wednesday','12.50-01.50'),
   ('Thursday','12.50-01.50'),
   ('Sunday','01.55-02.55'),
   ('Monday','01.55-02.55'),
   ('Tuesday','01.55-02.55'),
   ('Wednesday','01.55-02.55'),
   ('Thursday','01.55-02.55')
 ";
 if($conn->query($sql)== true) echo"Table created Successfully";
 else $conn->error;
	
} 
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
include 'AdTeacher.php';

$conn->close();
}
?>