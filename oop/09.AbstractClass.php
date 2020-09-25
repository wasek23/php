<?php
// Abstract Class
abstract class MainOffice{
    function __construct(){
        echo "Main office is running...";
    }

    abstract function absFunc();
}
// $main = new MainOffice; // We can't create an object of abstract class

class BranchOffice extends MainOffice{
    function absFunc(){} // We have to redeclare parent abstract methods in child class.
}
$branch = new BranchOffice;