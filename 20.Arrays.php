<?php
/*
    Arrays:
    
    Indexed arrays: Arrays with a numeric index.
    
    Associative arrays: Arrays with named keys.
    
    Multidimensional arrays: Arrays containing one or more arrays.
*/
    
// Indexed arrays:
$indArr = array("Abdullah", "Osman", "Wasek Bellah", "Habibullah");

echo $indArr[2] ."<br/><br/>"; // Print value by index number. Array start with 0 index.
echo count($indArr) ."<br/><br/>"; // Total Array count.

$arrLength = count($indArr);
for($a = 0; $a < $arrLength; $a++){
    echo $indArr[$a] ."<br/>";
}; // Print all value by for loop.
echo "<br/><br/>";


// Associative arrays:
$assArr = array("Abdullah" => "Jul 1993", "Osman" => "Nov 1994", "Wasek Bellah" => "Dec 1997", "Habibullah" => "Dec 2007");

echo $assArr["Wasek Bellah"] ."<br/><br/>"; // Print value by Array Key.

foreach($assArr as $key => $value){
    echo "My name is ". $key .". I was born on " . $value ."<br/>";
}; // Print all value by foreach loop.
echo "<br/><br/>";


// Multidimensional arrays:
$multiArr = array(
    array("Abdullah", "Jul 1993", "White"),
    array("Osman", "Nov 1994", "Blue"),
    array("Wasek Bellah", "Dec 1997", "Blue and Green"),
    array("Habibullah", "Dec 2007", "Pink")
);
echo $multiArr[2][2] ."<br/><br/>"; // Print value by index number. Array start with 0 index.
echo count($multiArr) ."<br/><br/>"; // Total Arrays count in parent Array.

$arrCount = count($multiArr);
echo "<table style='width: 50%; text-align: left;'>
        <thead>
            <th>Name</th>
            <th>Birth Date</th>
            <th>Favorite Color</th>
        </thead>";

        for($row = 0; $row < $arrCount; $row++){
            echo "<tr></tr>";
            
            for($col = 0; $col < 3; $col++){
                echo "<td>". $multiArr[$row][$col] ."</td>";
            };
        };
echo "</table>";