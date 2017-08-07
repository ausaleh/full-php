<?php

$employee1 = array("Abubakr","saleh",5700,900000);
$employee2 = array("Aliyu","usman",400,2000);
$employee3 = array("umar","lamba",500,30000);
$employees = array($employee1,$employee2 ,$employee3);

echo "employee name is::" . $employee1[0]. " and surname ". $employee1[1]."<br>";

echo "employee payroll is:: ".$employee2[2]. "<br>";

echo "Salary is:: " .$employee2[3]. "<br>";
echo "=======================================";
echo "<br>";

$count = count($employee1); 

for ($i=0; $i < $count; $i++) 
{ 
	# code...
	echo $employee1[$i] . "<br>";
}
echo "==========================="."<br>";
echo("first employee"."<br>");
echo $employees[0][1]."<br>";
echo $employees[0][2]."<br>";
echo $employees[0][3]."<br>";

echo "<h2>all employees</h2><br>";

$employee_count = count ($employees);

for ($y=0; $y < $employee_count ; $y++) { 
	# code...
	echo "<h3>detials of employee" . ($y + 1). "</h3><br>";
	for ($x=0; $x < $count; $x++){
		echo $employees[$y][$x]."<br>";

	}
}


?>

<!-- associtive array -->
<!-- <?php

$employee1 = array('firstname'=>"Abubakr",'lastname'=>"saleh",'payrol'=>5700,'salary'=>900000);
$employee2 = array('firstname'=>"Aliyu",'lastname'=>"usman",'payrol'=>400,'salary'=>2000);
$employee3 = array('firstname'=>"umar",'lastname'=>"lamba",'payrol'=>500,'salary'=>30000);
$employees = array($employee1,$employee2 ,$employee3);

echo "<h4>all employee detials<br></h4>";

foreach ($employee1 as $key => $value) {
	# code...
	echo $key . ":" . $value . "<br>";
}

echo "<h2>All employees</h2><br>";

$employee_count = count($employees);

for ($i=0;  $i< $employee_count; $i++) { 
	# code...
	for ($x=0; $x <$i ; $x++) { 
		# code...

	echo "<h3>emplee detials". ($x+1)."</h3><br>";
	
	foreach ($employees[$i] as $key => $value) {
	# code...
		/*<span style ="margin-left:40px;">*/
		/*echo "<h3>emplee detials</h3>";*//*</span>*/
	echo  $key . ":" . $value . "<br>";
}
}
}



?> -->