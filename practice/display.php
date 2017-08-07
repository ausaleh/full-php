<?php

include 'connect1.php';

if (isset($_POST['username']))
{
	$username = $_POST['username'];
}
if (isset($_POST['password'])) {
	# code...
	$password = $db->real_escape_string($_POST['password']);
}
echo "username: $username<br>";
echo "password: $password<br>";
$sql = "SELECT * from `test_db` 
	where `name` = '$username' && `password` = '$password' 
	ORDER BY `name`";

$result = $db->query($sql);

?>
<p><b>Your data are as follows</b></p>
<table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align: left;">
		<th style="width: 100px">ID</th>
		<th style="width: 150px">Name</th>
		<th style="width: 100px">password</th>
		<th style="width: 150px">secrate</th>
		
	</tr>
<?php 
while ($row=$result->fetch_object())
{
	$id = $row->id;
	$name = $row->name;
	$password = $row->password;
	$secrets = $row->secrets;
?>
	<tr>
		<td><?php echo $id?></td>
		<td><?php echo $name?></td>
		<td><?php echo $password?></td>
		<td><?php echo $secrets?></td>
	</tr>

	<!-- echo "$id $name $password $secrets<br>"; -->
	<?php
}
	
?>		
	
	
<!-- <tr style="text-align: left;">
			<td><?php echo $row['id']?></td>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['password']?></td>
			<td><?php echo $row['secrets']?></td>
			
		</tr> -->

</table>