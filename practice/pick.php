<?php


 include "connect1.php";

if (isset($_POST['name']))
{
	$name = $_POST['name'];
}
if (isset($_POST['idno'])) {
	# code...
	$id = $_POST['idno'];
}

$stmt = $db->prepare("INSERT INTO `lnf`(name,idno,) VALUES(?,?,?)");
	/*$stmt->bind_param('si',$username,$idno);
	$stmt->execute();
	$stmt->close();*/
header("location: claim.php");
?>