<?php

include 'connect1.php';
if(isset($_POST['id']))
{
	$id = ($_POST['id']);

}

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
	$stmt = $db->prepare("DELETE FROM test_bd WHERE id = {'1'}");
	
	
 
header("location: delete-display.php");

?>