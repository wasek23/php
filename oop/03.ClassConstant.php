<?php
// Class Constant
class ClassConstant{
    const PI = 3.1416; // For constant by default visibility is public

    function piValue(){
        return self::PI; // To get const value from current Class use 'self' instead of 'this' keyword and use '::' instead of '->'
    }
}
echo ClassConstant::PI;
echo "<br/>";

$piObj = new ClassConstant;
echo $piObj->piValue();