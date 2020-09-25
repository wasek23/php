<?php
// Do While Loop
$a = 0;
$b = 50;

do{
	echo $a . '<br/>';
	$a++;
}while($a <= $b); // Do While Loop

echo '<br/><br/>';

$c = 0;
$d = -50;

do{
	echo $c . '<br/>';
	$c--;
}while($c == $d); // Do While Loop, Execute Block One Time First, Without Condition

echo $c;