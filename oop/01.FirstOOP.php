<?php
// Class Declaration
class NameAge{
    // Property
    public $name = "Wasek Bellah";

    // Methods
    public function myName(){
        return $this->name;
    }
    public function myAge(){
        return 22;
    }
}

// Get access to Class
$wasek = new NameAge;

// Show Property Value
// echo $wasek->name;
// echo "<br/>";

// Show Method Value
echo $wasek->myName();
echo "<br/>";
echo $wasek->myAge();