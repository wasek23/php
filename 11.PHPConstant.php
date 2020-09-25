<?php
// Constant
// Syntax: define(name, value, case-insensitive);

define("MyNAME", "Md. Wasek Bellah", true); //

echo myName . "<br/><br/>"; // Constants Output with Case Insensitive

function globalConstant(){
    echo myName;
}

echo globalConstant(); // Constants Are Global