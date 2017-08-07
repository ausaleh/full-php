<?php

$family1 = array('family name' =>"Bin Affan1" ,'numbr' =>11,'high' =>"good");
$family2 = array('family name' => "Uthman",'number'=>20,'high'=>"vgood" );
$familys= array($family1,$family2);

$family_count = count ($familys);

for ($i=0; $i <$family_count ; $i++) { 
	# code...
	
	echo "<h3>family " . ($i + 1)." informaion </h3><br>";


foreach ($familys[$i] as $key => $value) {
	# code...

	echo "<span style =margin-left:40px;>". $key . ":" . $value ."</span><br>";
	
}
}




?>