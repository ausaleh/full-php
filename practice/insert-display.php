<?php

include 'connect1.php';

$sql = "SELECT * FROM `test_db`";

$result = $db->query($sql);


?>
<p><b>Result: </b></p>
<table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align: left;">		
		<th style="width: 150px">Name</th>
		<th style="width: 100px">password</th>
		<th style="width: 150px">secrate</th>
		
	</tr>
	<?php 
while ($row=$result->fetch_object())
{	
	$username = htmlentities($row->name, ENT_QUOTES, "UTF-8");
	$password = htmlentities($row->password, ENT_QUOTES, "UTF-8");
	$secrets = htmlentities($row->secrets, ENT_QUOTES, "UTF-8");
?>
	<tr>
		<td><?php echo $username?></td>
		<td><?php echo $password?></td>
		<td><?php echo $secrets?></td>
	</tr>
	<?php
}
?>
</table>
<p><b>add data: </b></p>
<form action="add.php" method="post">
	<table border="1" cellpadding="5" cellspacing="0">
	<tr style="text-align: left;">		
		<th style="width: 150px">Name</th>
		<th style="width: 100px">password</th>
		<th style="width: 150px">secrates</th>
		<th>&nbsp;</th>
	</tr>
	<tr>
		<td style="width:150px;"><input type="text" name="username"></td>
		<td style="width:150px;"><input type="text" name="password"></td>
		<td style="width:250px;"><input type="text" name="secrets"></td>
		<td><input type="submit" name="submit"></td>
	</tr>
</table>
</form>
	

</form>
