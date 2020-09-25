<?php
// Construct and Destruct
class ConstructDestruct{
    private $bio;

    function __construct($name, $color){
        echo $this->bio = "My name is: <strong>". $name ."</strong>, and my favorite color is: <strong>". $color ."</strong><br/>";
    }

    function __destruct(){
        echo "Destructor is working";
    }
}
$constructDestruct = new ConstructDestruct("Wasek Bellah", "Blue");