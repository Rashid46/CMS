<?php
function load_day()
{
	$connect = mysqli_connect("localhost","root","","routine");
	$output = '';
	$sql = "select distinct day from day";
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
	$sql = "select distinct period from day";
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


session_start();
$dept = $_POST['dept'];
$sems = $_POST['sems'];
$sec = $_POST['sec'];
$sname = $dept.$sems.$sec;
$_SESSION['totalcolumns']=$sname;
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
	
	$statement = $conn->prepare("
 
  create table if not exists $sname (
    day varchar(30) not null,
    period varchar(30) not null,
    course varchar(30)
  )
 ");

if($statement->execute()==true){
$sql="

  Insert into $sname (day,period)
   VALUES ('Sunday','8.15-9.15'),
   ('Monday','8.15-9.15'),
   ('Tuesday','8.15-9.15'),
   ('Wednesday','8.15-9.15'),
   ('Thursday','8.15-9.15'),
   ('Sunday','9.20-10.20'),
   ('Monday','9.20-10.20'),
   ('Tuesday','9.20-10.20'),
   ('Wednesday','9.20-10.20'),
   ('Thursday','9.20-10.20'),
   ('Sunday','10.25-11.25'),
   ('Monday','10.25-11.25'),
   ('Tuesday','10.25-11.25'),
   ('Wednesday','10.25-11.25'),
   ('Thursday','10.25-11.25'),
   ('Sunday','11.45-12.45'),
   ('Monday','11.45-12.45'),
   ('Tuesday','11.45-12.45'),
   ('Wednesday','11.45-12.45'),
   ('Thursday','11.45-12.45'),
   ('Sunday','12.50-01.50'),
   ('Monday','12.50-01.50'),
   ('Tuesday','12.50-01.50'),
   ('Wednesday','12.50-01.50'),
   ('Thursday','12.50-01.50'),
   ('Sunday','01.55-02.55'),
   ('Monday','01.55-02.55'),
   ('Tuesday','01.55-02.55'),
   ('Wednesday','01.55-02.55'),
   ('Thursday','01.55-02.55')
 ";
 if($conn->query($sql)== true) echo"Table created Successfully";
 else $conn->error;
	
}
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
		$sql = "select c_id,teacher from $sname where day='Sunday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th width='7%'>Sunday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td width='15.5%'>".$row["c_id"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		
		$sql = "select c_id,teacher from $sname where day='Monday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Monday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["c_id"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		$sql = "select c_id,teacher from $sname where day='Tuesday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Tuesday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["c_id"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		$sql = "select c_id,teacher from $sname where day='Wednesday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Wednesday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["c_id"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		$sql = "select c_id,teacher from $sname where day='Thursday' ";
		$result = $db -> query($sql);
		
		if($result->num_rows>0)
		{
			echo "<tr><th>Thursday</th>";
			while($row = $result->fetch_assoc())
			{
				echo "<td>".$row["c_id"]."<br>[".$row["teacher"]."]</td>";
			}
			
			echo "</tr>";
		}
		
	?>
		
	</table>
	<form action="last2.php" method="POST">
		<p>Select Day
		<select name="day" id="day">
			<option value="">Select Day</option>
			<?php echo load_day(); ?>
		</select></p>
		<p>Select Period
		<select name="period" id="period">
			<option value="">Select Period</option>
			<?php echo load_period(); ?>
		</select></p>
		<p>Select Course Name
		<select name="c_id" type="text" id="c_id">
			<option value="">Select Course</option>
			<?php echo load_course(); ?>
		</select></p>
		<p>Select Teacher
		<select name="teacher" id="teacher">
			<option value="">Select Teacher</option>
			<?php echo load_teacher(); ?>
		</select></p>
		<p>
		<input type="submit" value="submit">
		</P>
		<tr>
			<td><a href="Main1.html">Back</a></td><br>
			<td><a href="extra.html">Add Routine</a></td><br>
		</tr>
		
	</body>
</html>
