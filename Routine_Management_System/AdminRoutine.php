
<?php
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
<form action="AdminRoutine1.php" method="POST">
<tr>
		<td>Select Department</th><td>
		<select name="department" type="text" id="department">
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
		<td>Select Section</th><td>
		<select name="section">
		<option value="">Select Section</option>
		<option value="A">A</option>
		<option value="B">B</option>
		</select></th><br>
</tr>
<tr>
		<td>
		<input type="submit" value="submit">
		</th>
</tr>
<tr>
			<td><a href="Admin.html">Back</a></th>
</tr>
</table>
	</body>
</html>
