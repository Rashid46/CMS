<?php session_start();?>
<?php

// Grab User submitted information
$user = $_POST['user'];
$pass = $_POST['pass'];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("routine1",$con);


$result = mysql_query("SELECT * FROM t_registration WHERE Username = '$user' ");

$row = mysql_fetch_array($result);

if($row["Username"]==$user && $row["Password"]==$pass)
{
	echo"You are a validated user.";
	$name = $row["Name"];
	$_SESSION["user"]= $name;
	include 'view1.php';
}
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>