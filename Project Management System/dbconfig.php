<?php
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "routine1";
	mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server'); 
	mysql_select_db($dbname) or die('database selection problem');
?>