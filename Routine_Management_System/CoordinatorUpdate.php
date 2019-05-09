<?php
function load_teacher()
{
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select Name from teacher order by Name";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
	}
	return $output;
}
function load_department()
{
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select shortform from department order by shortform";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["shortform"].'">'.$row["shortform"].'</option>';
	}
	return $output;
}
function load_semester()
{
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select distinct semester from coordinator";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["semester"].'">'.$row["semester"].'</option>';
	}
	return $output;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Add</title>
<body>
<table>
<form action="CoordinatorUpdate1.php" method="POST">
<tr>
		<td>Select Teacher</th><td>
		<select name="teacher" type="text" id="teacher">
			<option value="">Select Teacher</option>
			<?php echo load_teacher(); ?>
		</select></th><br>
</tr>
<tr>
		<td>Select Department</th><td>
		<select name="dept" type="text" id="dept">
			<option value="">Select Department</option>
			<?php echo load_department(); ?>
		</select></th><br>
</tr>
<tr>
		<td>Select Semester</th><td>
		<select name="semester" type="text" id="semester">
			<option value="">Select Semester</option>
			<?php echo load_semester(); ?>
		</select></th><br>
</tr>
<tr>
		<td>
		<input type="submit" value="submit">
		</th>
</tr>
<tr>
			<td><a href="AdCoordinator.php">Back</a></th>
</tr>
</table>
	</body>
</html>
