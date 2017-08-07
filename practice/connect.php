<?php


$dbconnect = array(
	'server'=>'localhost',
	'user'=>'root',
	'pass'=>'',
	'name'=>'test_db'

);

$db = new mysqli($dbconnect['server'],
	$dbconnect['user'],
	$dbconnect['pass'],
	$dbconnect['name']
	);

/*cho $db ->host_info;

echo "<br>";

echo $db -> connect_errno;

echo "<br>";
*/
if ( $db -> connect_errno > 0)
{
	echo $db -> connect_errno;
	exit;
}

$sql = "select * from `test_db` order by `name`";

$result = $db ->query($sql);

while ($row=$result->fetch_object())
{
	$id = $row->id;
	$name = $htmlentities($row->name, ENT_QUOTES,"UTF-8");
	$password = $htmlentities($row->password, ENT_QUOTES,"UTF-8");
	$secrets = $htmlentities($row->secrets, ENT_QUOTES,"UTF-8");

	echo "$id $name $password $secrets<br>";
}




?>