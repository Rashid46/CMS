<?php 

$sname = $_POST['short_name'];

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
		$sql = "select course from $sname where day='Sunday' ";
		$result = $db -> query($sql);
		if($result->num_rows>0)
		{
			echo "<tr><th width='7%'>Sunday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td width='15.5%'>".$row["course"]."<br></td>";
			}
			
			echo "</tr>";
		}
		
		$sql = "select course from $sname where day='Monday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Monday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br></td>";
			}
			
			echo "</tr>";
		}
		$sql = "select course from $sname where day='Tuesday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Tuesday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br></td>";
			}
			
			echo "</tr>";
		}
		$sql = "select course from $sname where day='Wednesday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Wednesday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br></td>";
			}
			
			echo "</tr>";
		}
		$sql = "select course from $sname where day='Thursday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Thursday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["course"]."<br></td>";
			}
			
			echo "</tr>";
		}




?>