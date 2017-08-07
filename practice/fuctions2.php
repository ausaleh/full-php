<?php

function area($x,$y,$format)
{
	$area = $x * $y;
	$output = "<$format>$area</$format>";
	return $output;
}
$area= area(2,3,'h1');
echo $area;
?>
<!-- SELECT firstname, lastname from movies WHERE lastname in/not in ('abu','kai','nawa') -->