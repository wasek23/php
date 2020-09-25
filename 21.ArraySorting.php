<?php
/*
    Array Sorting:
    
    sort(): sort arrays in ascending order
    rsort(): sort arrays in descending order
    asort(): sort associative arrays in ascending order, according to the value
    ksort(): sort associative arrays in ascending order, according to the key
    arsort(): sort associative arrays in descending order, according to the value
    krsort(): sort associative arrays in descending order, according to the key
*/
// Alphabetical and Numerical Array sorting are the same way.
    
// sort(), rsort():
$names = array("Abdullah", "Osman", "Wasek Bellah", "Habibullah");

$arrLength = count($names);

sort($names);
for($a = 0; $a < $arrLength; $a++){
    echo $names[$a] ."<br/>";
}; // Array sort by Ascending order.

echo "<br/>";

rsort($names);
for($a = 0; $a < $arrLength; $a++){
    echo $names[$a] ."<br/>";
}; // Array sort by Descending order.

echo "<br/><br/>";


// asort(), ksort(), arsort(), krsort():
$namesAges = array("Abdullah" => "1993", "Osman" => "1994", "Wasek Bellah" => "1997", "Habibullah" => "2007");

asort($namesAges);
foreach($namesAges as $key => $value){
    echo "My name is ". $key .". I was born on " . $value ."<br/>";
}; // Array sort by Ascending order, According to Value.

echo "<br/>";

ksort($namesAges);
foreach($namesAges as $key => $value){
    echo "My name is ". $key .". I was born on " . $value ."<br/>";
}; // Array sort by Ascending order, According to Key.

echo "<br/>";

arsort($namesAges);
foreach($namesAges as $key => $value){
    echo "My name is ". $key .". I was born on " . $value ."<br/>";
}; // Array sort by Descending order, and According to Value.

echo "<br/>";

krsort($namesAges);
foreach($namesAges as $key => $value){
    echo "My name is ". $key .". I was born on " . $value ."<br/>";
}; // Array sort by Descending order, According to Key.