<?php
	$hostname = 'localhost';
	$uname = 'root';
	$pass = '';
	$db_name = 'shopping';
	$con = mysql_connect($hostname,$uname,$pass);
	mysql_select_db($db_name,$con);
?>	