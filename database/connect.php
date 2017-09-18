<?php
	# Details for DB connection
	$host = "localhost";
	$user = ""; //Database no longer exists
	$password = "";
	$dbname = "";
	
	# Connecting to the database
	$dbc = mysql_connect($host, $user, $password) or die("Cant connect" . mysql_error());
	mysql_select_db($dbname) or die("Select failed " . mysql_error());	
?>