<?php
session_start();
$ds=$_SESSION['totalcolumns'];
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
	
	mysql_connect("localhost","root","");
	mysql_select_db("routine");
	
	if(($_POST['c_id']==NULL and $_POST['teacher']==NULL) or ($_POST['c_id']!=NULL and $_POST['teacher']!=NULL))
	{
		$result1 = mysql_query("update $ds set c_id = '".$_POST["c_id"]."', teacher = '".$_POST["teacher"]."' where day = '".$_POST["day"]."' and period = '".$_POST["period"]."'");
	}
	else echo ("Failed to query Database".mysql_error());
	
	//include "last1.php";
	include "ex1.php";
?>