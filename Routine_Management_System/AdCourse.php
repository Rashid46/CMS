<table style="width:1000px; margin:auto; color:black; padding:5px;" border="5" bgcolor="white">
	<tr><th colspan="6"><h1>Course Record</h1></th></tr>
	<tr>
	<td><h3>Code</h3></td>
	<td><h3>Title</h3></td>
	<td><h3>Credit</h3></td>
	<td><h3>Type</h3></td>
	<td><h3>Semester</h3></td>
	<td><h3>Dept</h3></td>
<?php

		$con = mysqli_connect("localhost","root","","routine");
		if(!$con)
		{
			die("Connection Failed:". mysql_error());
		}
		$sql = "Select * from course";
		$result = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['Code']."</td>";
			echo "<td>".$row['Title']."</td>";
			echo "<td>".$row['Credit']."</td>";
			echo "<td>".$row['Type']."</td>";
			echo "<td>".$row['Semester']."</td>";
			echo "<td>".$row['Dept']."</td>";
			echo "</tr>";
		}
?>
</table>

<html>
<head>
</head>
<body>
		<tr>
			<td><a href="CourseAdd.html">Add Course</a></td><br>
			<td><a href="CourseDelete.html">Delete Course</a></td><br>
			<td><a href="CourseUpdate.html">Update Info</a></td><br>
			<br>
			<br>
			<td><a href="AdminManage.html">Back</a></td><br>
		</tr>
		
	</body>
</html>