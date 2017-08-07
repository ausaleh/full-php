<!-- include the content of a content of a file to another if not there it will just give a waring and run -->
<!-- requiure meaning that it has t be there of not it wont run -->
<!-- include_once is used to make sure there is not repetition -->	
<?php
require_once 'include/file1.php';
echo "<br>";
include_once 'include/file2.php';
echo "<br>";
include_once 'include/file3.php';

echo "<p> my best car are: ".$car1." , ".$car2." and ".$car3;
?>