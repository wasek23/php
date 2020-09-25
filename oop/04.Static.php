<?php
// Static (Properties and Methods)
class StaticClass{
    static $name = "Wasek Bellah";

    static function myName(){
        return self::$name;
    }
}
echo StaticClass::$name;
echo "<br/>";
echo StaticClass::myName();