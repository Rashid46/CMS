<table style="width:1000px; margin:auto; color:black; padding:5px;" border="6" bgcolor="white">
	<tr><th colspan="7"><h1>Teacher Record</h1></th></tr>
	<tr>
	<td><h3>Name</h3></td>
	<td><h3>Short Name</h3></td>
	<td><h3>Dept</h3></td>
	<td><h3>Designation</h3></td>
	<td><h3>Contact No.</h3></td>
	<td><h3>Email</h3></td>
	<td><h3>Credit</h3></td>
<?php

		$con = mysqli_connect("localhost","root","","routine");
		if(!$con)
		{
			die("Connection Failed:". mysql_error());
		}
		$sql = "Select * from teacher";
		$result = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Short_name']."</td>";
			echo "<td>".$row['Dept']."</td>";
			echo "<td>".$row['Designation']."</td>";
			echo "<td>".$row['Contact_No']."</td>";
			echo "<td>".$row['Email']."</td>";
			echo "<td>".$row['Credit']."</td>";
			echo "</tr>";
		}
?>
</table>

<html>
<head>
</head>
<body>
		<tr>
			<td><a href="TeacherAdd.html">Add Teacher</a></td><br>
			<td><a href="TeacherDelete.html">Delete Teacher</a></td><br>
			<td><a href="TeacherUpdate.html">Update Info</a></td><br>
			<br>
			<br>
			<td><a href="AdminManage.html">Back</a></td><br>
		</tr>
		
	</body>
</html>