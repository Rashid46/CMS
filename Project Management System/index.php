<?php session_start();?>
<?php
include 'dbconfig.php';
function load_teacher()
{
	$connect = mysqli_connect("localhost","root","","routine1");
	$output = '';
	$sql = "select Name from t_registration";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
	}
	return $output;
}
function load_Course()
{
	$connect = mysqli_connect("localhost","root","","routine1");
	$output = '';
	$sql = "select C_code from Course";
	$result = mysqli_query($connect,$sql);
	while($row = mysqli_fetch_array($result))
	{
		$output .= '<option value="'.$row["C_code"].'">'.$row["C_code"].'</option>';
	}
	return $output;
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>File Uploading With PHP and MySql</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id="header">
<label>File Uploading With PHP and MySql</label>
</div>
<div id="body">
 <form action="upload.php" method="post" enctype="multipart/form-data">
 <input type="file" name="file" />
	<p>Select Course
		<select name="C_code" id="C_code">
			<option value="">Select Course</option>
			<?php echo load_Course(); ?>
		</select></p>
		<p>Select Teacher
		<select name="Name" id="Name">
			<option value="">Select Teacher</option>
			<?php echo load_teacher(); ?>
		</select></p>
 <button type="submit" name="btn-upload">upload</button>
 
 </form>
    <br /><br />
    <?php
 if(isset($_GET['success']))
 {
  ?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
 }
 else if(isset($_GET['fail']))
 {
  ?>
        <label>Problem While File Uploading !</label>
        <?php
 }
 else
 {
  ?>
        <label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>
        <?php
 }
 ?>
</div>

</body>
</html>