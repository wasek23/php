<?php
// Function

function normalFunc(){
    echo "My name is Wasek Bellah";
}
normalFunc(); // Normal Function.
echo "<br/><br/><br/>";


// Function- Argument
function argFunc($name, $color, $address){
    echo "My name is <strong>$name</strong> and my favorite color is <strong>$color.</strong> I live in <strong>$address.</strong> <br/><br/>";
}
argFunc("Abdullah", "White", "Rangpur");
argFunc("Osman", "Blue", "Dinajpur");
argFunc("Wasek Bellah", "Blue and Green", "Dinajpur");
argFunc("Habibullah", "Pink", "Dinajpur");
echo "<br/>";


function argValueFunc($name = "Wasek Bellah", $color = "Blue and Green", $address = "Dinajpur"){
    echo "My name is <strong>$name</strong> and my favorite color is <strong>$color.</strong> I live in <strong>$address.</strong> <br/><br/>";
}
argValueFunc("Abdullah", "White", "Rangpur");
argValueFunc("Osman", "Blue", "Dinajpur");
argValueFunc();
argValueFunc("Habibullah", "Pink", "Dinajpur"); // Argument Function With Default Value.
echo "<br/>";


// Function- Returning Values
function multi($a, $b){
    $c = $a * $b;
    return $c;
}
echo "5 * 7 = " , multi(5, 7) , "<br/><br/>";
echo "6 * 4 = " , multi(6, 4) , "<br/><br/>";
echo "3 * 9 = " , multi(3, 9) , "<br/><br/>";