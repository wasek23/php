<?php
// Inheritance
class Father{
    protected $familyName = "Stack";
    function fatherName(){
        return "Father name is: <strong>Howard ". $this->familyName ."</strong>";
    }
}
$fatherDetails = new Father;
echo $fatherDetails->fatherName();
echo "<br/>";


class Child extends Father{
    function childName(){
        return "Child name is: <strong>Tony ". $this->familyName ."</strong>";
    }
}
$childDetails = new Child;
echo $childDetails->childName();