<!DOCTYPE html>
<html>
<head>
	<title>Co-Ordinator</title>
<body>
<table style="width:800px; margin:auto; color:black; padding:10px;" border="5" bgcolor="white">
	<tr><th colspan="4"><h1>Co-ordinator Record</h1></th></tr>
	<tr>
	<td><h3>Teacher</h3></td>
	<td><h3>Short Name</h3></td>
	<td><h3>Department</h3></td>
	<td><h3>Semester</h3></td>
<?php

		$con = mysqli_connect("localhost","root","","routine");
		if(!$con)
		{
			die("Connection Failed:". mysql_error());
		}
		$sql = "Select * from coordinator";
		$result = mysqli_query($con,$sql);
		
		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>".$row['Teacher']."</td>";
			echo "<td>".$row['Short Name']."</td>";
			echo "<td>".$row['Department']."</td>";
			echo "<td>".$row['Semester']."</td>";
			echo "</tr>";
		}
?>
</table>
	<tr>
		<td><a href="CoordinatorUpdate.php">Update Info</a></td><br>
		<br>
		<br>
		<td><a href="AdminManage.html">Back</a></td><br>
	</tr>

</body>
</html>
