<?php
$dept = $_POST['department'];
$sems = $_POST['semester'];
$sec = $_POST['section'];
$sname = $dept.$sems.$sec;
if(!empty($dept) || !empty($sems))
{
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "routine";

$conn = new mysqli($host,$dbUsername,$dbPassword,$dbName);
	if(mysqli_connect_error())
	{
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	
}
function load_day()
{
	$sname= $_SESSION['totalcolumns'];
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select distinct day from $sname";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["day"].'">'.$row["day"].'</option>';
	}
	return $output;
}
function load_period()
{
	
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sname= $_SESSION['totalcolumns'];
	$sql = "select distinct period from $sname";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["period"].'">'.$row["period"].'</option>';
	}
	return $output;
}
function load_course()
{
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select title from course order by title";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["title"].'">'.$row["title"].'</option>';
	}
	return $output;
}
function load_teacher()
{
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select name from teacher order by name";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["name"].'">'.$row["name"].'</option>';
	}
	return $output;
}

?>

<html>
	<head>
		<title>Class Routine</title>
		<style type="text/css">
		table {
			border-collapse: collapse;
			width: 100%;
			color: #588c7e;
			font-family: monospace;
			font-size: 14px;
			text-align: center;
		}
		</style>
		<script src="jquery.js"></script>
	</head>
	
	<body>
		<table border="1" cellpadding="5">
		<tr>
			<td>Day\Period</td>
			<td>8.15-9.15</td>
			<td>9.20-10.20</td>
			<td>10.25-11.25</td>
			<td>11.45-12.45</td>
			<td>12.50-1.50</td>
			<td>1.55-2.55</td>
		</tr>
		<?php
		$dbHost 	=	'localhost';
		$dbUsername	=	'root';
		$dbPassword =	'';
		$dbName		=	'routine';

		$db = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
		if($db-> connect_error)
		{
			die("Connection Failed:". $conn-> connect_error);
		}
		$sql = "select course,teacher from $sname where day='Sunday' ";
		$result = $db -> query($sql);
		if($result->num_rows>0)
		{
			echo "<tr><th width='7%'>Sunday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td width='15.5%'>".$row["course"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		
		$sql = "select course,teacher from $sname where day='Monday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Monday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		$sql = "select course,teacher from $sname where day='Tuesday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Tuesday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		$sql = "select course,teacher from $sname where day='Wednesday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Wednesday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		$sql = "select course,teacher from $sname where day='Thursday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Thursday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
?>

 