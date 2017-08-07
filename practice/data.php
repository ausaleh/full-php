<?php
	$hostname="localhost";
	$username="";
	$password="";
	mysql_connect($hostname, $username, $password) or die(mysql_error());
	echo "connected to mysql ....";
?>