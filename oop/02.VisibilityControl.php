<?php
// Visibility Control (public, private, protected)
class Visibility{
    public $name = "Wasek Bellah"; // This can be accessed from anywhere.
    private $age = 22; // This can be accessed in own class.
    protected $work = "Web Developer"; // This can be accessed by own class and its child class.

    function myAddress(){
        return "Rampara, Ghoraghat, Dinajpur";
    } // Don't need to declare method by using public keyword it's by default public
}

$wasekDetail = new Visibility;
echo $wasekDetail->name;
echo "<br/>";
// echo $wasekDetail->age;
// echo $wasekDetail->work;

echo $wasekDetail->myAddress();