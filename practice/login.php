<?php
	$uuser = $_GET["user"];
	$ppass = $_GET["pass"];

if ($uuser === "abu" && $ppass === "kai")
{
	echo "successfull";
}
elseif ($uuser=== "" && $ppass==="")
{
	echo "it cant be empty think man!!!!";
}
else
{
	echo "faild wrong detials try aging by cliking<a href=index.html>cli</a>";	
}
?>