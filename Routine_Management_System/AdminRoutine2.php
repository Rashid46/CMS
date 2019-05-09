<?php
session_start();
$sname=$_SESSION['totalcolumns'];
$day = $_POST['day'];
$period = $_POST['period'];
$c_id = $_POST['c_id'];
$teacher = $_POST['teacher'];
	
	$day = stripcslashes($day);
	$day = mysql_real_escape_string($day);
	
	$period = stripcslashes($period);
	$period = mysql_real_escape_string($period);
	
	$c_id = stripcslashes($c_id);
	$c_id = mysql_real_escape_string($c_id);
	
	$teacher = stripcslashes($teacher);
	$teacher = mysql_real_escape_string($teacher);
	
	$dbHost 	=	'localhost';
	$dbUsername	=	'root';
	$dbPassword =	'';
	$dbName		=	'routine';
	
	$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
	if($db-> connect_error)
		{
			die("Connection Failed:". $db-> connect_error);
		}
	$sql= "select * from teacher where name='".$_POST['teacher']."'";
	$result = mysqli_query($db,$sql);
	$row= mysqli_fetch_assoc($result);
	$shortname= $row['Short_name'];
	
	$sql= "select * from $shortname where day = '".$_POST["day"]."' and period = '".$_POST["period"]."'";
	$result = mysqli_query($db,$sql);
	$row= mysqli_fetch_assoc($result);
	if($row['course']== Null)
	{
		$sql = "update $shortname set course = '".$_POST["c_id"]."', class = '".$sname."' where day = '".$_POST["day"]."' and period = '".$_POST["period"]."' ";
		$result = $db -> query($sql);
		$sql = "update $sname set course = '".$_POST["c_id"]."', teacher = '".$_POST["teacher"]."' where day = '".$_POST["day"]."' and period = '".$_POST["period"]."' ";
		$result = $db -> query($sql);
	}
	else echo "The teacher is already allocated!";
	
	
	
	//$result = mysql_connect($connect,$sql);
	//else echo ("Failed to query Database".mysql_error());
	
	//include "last1.php";
	include "AdminRoutine.php";
?>