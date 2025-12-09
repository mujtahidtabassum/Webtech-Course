<?php

$name = "John Doe";
$age = 25;
$price = 99.99;
$isStudent = true;

echo "String: " . $name . "<br>";
echo "Integer: " . $age . "<br>";
echo "Float: " . $price . "<br>";
echo "Boolean: " . ($isStudent ? "true" : "false") . "<br><br>";

$num1 = 10;
$num2 = 5;

$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

echo "Addition: " . $num1 . " + " . $num2 . " = " . $addition . "<br>";
echo "Subtraction: " . $num1 . " - " . $num2 . " = " . $subtraction . "<br>";
echo "Multiplication: " . $num1 . " * " . $num2 . " = " . $multiplication . "<br>";
echo "Division: " . $num1 . " / " . $num2 . " = " . $division . "<br><br>";

$float1 = 15.5;
$float2 = 3.2;

$addFloat = $float1 + $float2;
$subFloat = $float1 - $float2;
$mulFloat = $float1 * $float2;
$divFloat = $float1 / $float2;

echo "Float Addition: " . $float1 . " + " . $float2 . " = " . $addFloat . "<br>";
echo "Float Subtraction: " . $float1 . " - " . $float2 . " = " . $subFloat . "<br>";
echo "Float Multiplication: " . $float1 . " * " . $float2 . " = " . $mulFloat . "<br>";
echo "Float Division: " . $float1 . " / " . $float2 . " = " . $divFloat . "<br><br>";

$a = 20;
$b = 30;

echo "Sum using echo: " . ($a + $b) . "<br>";
print "Sum using print: " . ($a + $b) . "<br><br>";

echo "=== Variable Type and Value Dump ===<br><br>";

var_dump($name);
var_dump($age);
var_dump($price);
var_dump($isStudent);
var_dump($num1);
var_dump($float1);

?>