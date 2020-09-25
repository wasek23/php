<?php
// Method Overwriting
class Father{
    function character(){
        echo "Father is very good";
    }
}
$fatherDetails = new Father;
$fatherDetails->character();
echo "<br/>";

class Child extends Father{
    function character(){
        echo " - Child is good". parent::character();
    }
}
$childDetails = new Child;
$childDetails->character();