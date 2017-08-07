<?php

include 'connect1.php';

if (isset($_POST['username']))
{
	$username = $_POST['username'];
}
if (isset($_POST['password'])) {
	# code...
	$password = $_POST['password'];
}
if (isset($_POST['password'])) {
	# code...
	$secrets = $_POST['secrets'];
}
$stmt = $db->prepare("INSERT INTO `test_db`(name,password,secrets) VALUES(?,?,?)");
	$stmt->bind_param('sss',$username,$password,$secrets);
	$stmt->execute();
	$stmt->close();
header("location: insert-display.php");
?>