<?php
// Variable Scope
$glo = 42; // This is global Variable. You can use this variable anywhere.

function one(){
    $loc = 65; // This is local Variable. You can not use this variable outside this function.
    echo $loc ."<br/><br/>";
    
    global $glo; // If use global variable in function, you have to declare, that is global.
    echo $glo;
};
one();