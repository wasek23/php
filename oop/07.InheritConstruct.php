<?php
// Inherit Construct
class Father{
    function __construct(){
        echo "Father constructor is loading <br/>";
    }
}

class Child extends Father{
    function __construct(){
        parent::__construct();
        echo "Child constructor is loading";
    }
}
$childDetails = new Child;