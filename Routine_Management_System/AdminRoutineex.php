<?php
session_start();
$dept = $_POST['department'];
$sems = $_POST['semester'];
$sec = $_POST['section'];
global $sname;
$sname = $dept.$sems.$sec;
$_SESSION['totalcolumns']=$sname;
include "AdminRoutine1.php";

?>