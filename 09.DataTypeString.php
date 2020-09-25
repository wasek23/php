<?php
// Data Type - String
$string = 'Md. Wasek Bellah';

echo $string;
echo'<br/><br/>';

echo strlen($string); // String Length
echo'<br/><br/>';

echo str_word_count($string); // String Word Count
echo'<br/><br/>';

echo strrev($string); // String Reverse
echo'<br/><br/>';

echo strpos($string , "s"); // String Position after Letter
echo'<br/><br/>';

echo str_replace("Md.", "My Name is", $string); // String Replace
echo'<br/><br/>';
