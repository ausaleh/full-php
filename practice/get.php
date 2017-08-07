<?php


if (isset($_GET['user_id'])) {
	# code...

$user_id = $_GET['user_id'];

echo "your user_id is $user_id";
}


else{
	# code...
	echo "user id not set";
}

?>