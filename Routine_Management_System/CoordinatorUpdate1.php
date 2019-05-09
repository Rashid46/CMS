<?php
$dept = $_POST['dept'];
$semester = $_POST['semester'];
$teacher = $_POST['teacher'];
	
	$dept= stripcslashes($dept);
	$dept = mysql_real_escape_string($dept);
		
	$semester = stripcslashes($semester);
	$semester = mysql_real_escape_string($semester);
	
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
	$sqli = "select * from teacher where name= '".$_POST["teacher"]."' ";
	$row = $db -> query($sqli);
	
	$sql = "update coordinator set teacher = '".$_POST["teacher"]."'
			and `short name` = '".$row["short_name"]."'
			where 
			department = '".$_POST["dept"]."'
			and semester = '".$_POST["semester"]."'";
	$result = $db -> query($sql);
//		$result1 = mysql_query("update coordinator set teacher = '".$_POST["teacher"]."' where department = '".$_POST["dept"]."', semester = '".$_POST["semester"]."'");
		/*$sql= "UPDATE coordinator set
				teacher= '".$_POST["teacher"]."'"*/
	
	//include "last1.php";
	include "AdCoordinator.php";
?>