<?php
/*
    Operators:
    
    Arithmetic operators: (+)Addition, (-)Subtraction, (*)Multiplication, (/)Division, (%)Modulus, (**)Exponentiation.
    
    Assignment operators: (=)Equal to, (+=)Addition Equal to, (-=)Subtraction Equal to, (*=)Multiplication Equal to, (/=)Division Equal to, (%=)Modulus Equal to.
    
    Comparison operators: (==)Equal, (===)Identical, (!=)Not Equal, (<>)Not Equal, (!==)Not Identical, (>)Greater Than, (<)Less Than, (>=)Greater Than and Equal to, (<=)Less Than and Equal to.
    
    Increment/Decrement operators: (++)Increment, (--)Decrement, (++$x)Pre Increment, ($x++)Post Increment, (--$x)Pre Decrement, ($x--)Post Decrement.
    
    Logical operators: (and)And, (or)Or, (xor)Xor, (&&)And, (||)Or, (!)Not.
    
    String operators: (.)Concatenation, (.=)Concatenation Assignment.
    
    Array operators: (+)Union, (==)Equality, (===)Identity, (!=)Inequality, (<>)Inequality, (!==)Non Identity.
*/
    
// Arithmetic operators:
echo 13 + 9 . "<br/><br/>"; //Addition
echo 13 - 9 . "<br/><br/>"; //Subtraction
echo 13 * 9 . "<br/><br/>"; //Multiplication
echo 13 / 9 . "<br/><br/>"; //Division
echo 13 % 9 . "<br/><br/><br/>"; //Modulus


// Assignment operators:
$EqTo = 60;
echo $EqTo . "<br/><br/>"; //Equal to, The left operand gets set to the value of the expression on the right.

$AddEqTo = 60;
$AddEqTo += 25;
echo $AddEqTo . "<br/><br/>"; //Addition Equal to

$SubEqTo = 60;
$SubEqTo -= 25;
echo $SubEqTo . "<br/><br/>"; //Subtraction Equal to

$MultiEqTo = 60;
$MultiEqTo *= 25;
echo $MultiEqTo . "<br/><br/>"; //Multiplication Equal to

$DivEqTo = 60;
$DivEqTo /= 25;
echo $DivEqTo . "<br/><br/>"; //Division Equal to

$ModEqTo = 60;
$ModEqTo %= 25;
echo $ModEqTo . "<br/><br/><br/>"; //Modulus Equal to


// Comparison operators:
$p = 80;
$q = "80";

if ($p == $q){
	echo 'Equal Comparison True';
}else{
	echo 'Equal Comparison False';
} // Equal Operator, Returns true if both are equal.

echo '<br/><br/>';

if ($p === $q){
	echo 'Identical Comparison True';
}else{
	echo 'Identical Comparison False';
} // Identical Operator, Returns true if both are equal and same type.

echo '<br/><br/>';

if ($p != $q){
	echo 'Not Equal Comparison True';
}else{
	echo 'Not Equal Comparison False';
} // Not Equal Operator, Returns true if both are no equal.

echo '<br/><br/>';

if ($p <> $q){
	echo 'Not Equal Comparison True';
}else{
	echo 'Not Equal Comparison False';
} // Not Equal Operator, Returns true if both are not equal.

echo '<br/><br/>';

if ($p !== $q){
	echo 'Not Identical Comparison True';
}else{
	echo 'Not Identical Comparison False';
} // Not Identical Operator, Returns true if both are not equal or not of the same type.

echo '<br/><br/>';

if ($p < $q){
	echo 'Less Then Comparison True';
}else{
	echo 'Less Then Comparison False';
} // Less Then Operator, Returns true if first less then last.

echo '<br/><br/>';

if ($p <= $q){
	echo 'Less Then and Equal to Comparison True';
}else{
	echo 'Less Then and Equal to Comparison False';
} // Less Then and Equal to Operator, Returns true if first less then or equal to last.

echo '<br/><br/>';

if ($p > $q){
	echo 'Greater Then Comparison True';
}else{
	echo 'Greater Then Comparison False';
} // Greater Then Operator, Returns true if first greater then last.

echo '<br/><br/>';

if ($p >= $q){
	echo 'Greater Then and Equal to Comparison True';
}else{
	echo 'Greater Then and Equal to Comparison False';
} // Greater Then and Equal to Operator, Returns true if first greater then or equal to last.

echo '<br/><br/><br/>';


// Increment/Decrement operators:
$Increment = 15;
echo ++$Increment . "<br/><br/>"; // Pre Increment, Increment value by one, then returns value.

$Increment = 15;
echo $Increment++ . "<br/><br/>"; // Post Increment, Returns value, then Increment value by one.

$Decrement = 15;
echo --$Decrement . "<br/><br/>"; // Pre Decrement, Decrement value by one, then returns value.

$Decrement = 15;
echo $Decrement-- . "<br/><br/><br/>"; // Post Decrement, Returns value, then Decrement value by one.


//Logical operators:
$LogicA = 70;
$LogicB = 50;

if ($LogicA == 70 and $LogicB == 50){
	echo 'And Logic True';
}else{
	echo 'And Logic False';
} // And Operator, Returns true if both are true.

echo '<br/><br/>';

if ($LogicA == 70 or $LogicB == 60){
	echo 'Or Logic True';
}else{
	echo 'Or Logic False';
} // Or Operator, Returns true if either is true.

echo '<br/><br/>';

if ($LogicA == 70 xor $LogicB == 50){
	echo 'Xor Logic True';
}else{
	echo 'Xor Logic False';
} // Xor Operator, Returns true if either is true, but not both.

echo '<br/><br/>';

if ($LogicA == 70 && $LogicB == 60){
	echo 'And Logic True';
}else{
	echo 'And Logic False';
} // And Operator, Returns true if both are true.

echo '<br/><br/>';

if ($LogicA == 70 || $LogicB == 50){
	echo 'Or Logic True';
}else{
	echo 'Or Logic False';
} // Or Operator, Returns true if either is true.

echo '<br/><br/>';

if ($LogicA !== 70){
	echo 'Not Logic True';
}else{
	echo 'Not Logic False';
} // Not Operator, Returns true if value is not true.

echo '<br/><br/><br/>';
	

//String operators:
$StringA = "Md. Wasek";
$StringB = " Bellah";

echo $StringA . $StringB . "<br/><br/>"; // Concatenation, Concatenation between.

$StringA .= $StringB;
echo $StringA . "<br/><br/><br/>"; // Concatenation assignment, Appends between.
	

//Array operators:
$ArrA = array("1" => "One", "2" => "Two", "3" => "Three");
$ArrB = array("4" => "Four", "5" => "Five", "6" => "Six");

print_r($ArrA + $ArrB); // Union, Union between.

echo '<br/><br/>';

if ($ArrA == $ArrB){
	echo 'Equality Array True';
}else{
	echo 'Equality Array False';
} // Equality Operator, Returns true if both have the same key/value pairs.

echo '<br/><br/>';

if ($ArrA === $ArrB){
	echo 'Identity Array True';
}else{
	echo 'Identity Array False';
} // Identity Operator, Returns true if both have the same key/value pairs in the same order and of the same types.

echo '<br/><br/>';

if ($ArrA != $ArrB){
	echo 'Inequality Comparison True';
}else{
	echo 'Inequality Comparison False';
} // Inequality Operator, Returns true if both are no equal.

echo '<br/><br/>';

if ($ArrA <> $ArrB){
	echo 'Inequality Comparison True';
}else{
	echo 'Inequality Comparison False';
} // Inequality Operator, Returns true if both are not equal.

echo '<br/><br/>';

if ($ArrA !== $ArrB){
	echo 'Non Identity Comparison True';
}else{
	echo 'Non Identity Comparison False';
} // Non Identity Operator, Returns true if both are not identical.