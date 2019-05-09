
<?php

// Grab User submitted information
$user = $_POST['user'];
$pass = $_POST['pass'];
  // Set session variables

// Connect to the database
//$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
/*if(! $con)
{
    die('Connection Failed'.mysql_error());
}*/

// Select the database to use
//mysql_select_db("routine1",$con);

//$result = mysql_query("SELECT * FROM admin WHERE username = '$user' ");

//$row = mysql_fetch_array($result);
$dbHost 	=	'localhost';
	$dbUsername	=	'root';
	$dbPassword =	'';
	$dbName		=	'routine';
	
	$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if($db-> connect_error)
		{
			die("Connection Failed:". $db-> connect_error);
		}
		$sql = "SELECT * FROM admin WHERE username = '$user' ";
$result = mysqli_query($db,$sql);
	$row= mysqli_fetch_assoc($result);

if($row["username"]==$user && $row["password"]==$pass)
{
	echo"You are a validated user.";
	include "Admin.html";
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>