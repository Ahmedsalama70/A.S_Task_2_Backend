<?php

// A.S_Task2.php
// -------------


echo "<br>--1--<br>";
// A) Addition of two numbers

$number1 = 10;
$number2 = 5;
$sum = $number1 + $number2;

echo "First number : " . $number1 . "<br>";
echo "Second number : " . $number2 . "<br>";
echo "Sum of the two numbers is: " . $sum . "<br>";
echo "<br>**********************************************<br>\n";


echo "<br>--2--<br>";


// A) Pre-Increment

$a = 4;

echo "<h3>A) Pre-Increment :</h3>";
echo "I have: " . (++$a) . " books.<br>";
echo "<br>";


// B) Post-Increment

$a = 4;

echo "<h3>B) Post-Increment :</h3>";
$a++;
echo "I have: " . $a . " books.<br>";
echo "<br>**********************************************<br>\n";


echo "<br>--3--<br>";
// C) Concatenated Assignment Operator (.)
$sentence = null;
$first = "In";
$second = "PHP";
$third = "Course";

echo "<h3>using the concatenated assignment operator (.) :</h3>";
$sentence .= $first;
$sentence .= " ";
$sentence .= $second;
$sentence .= " ";
$sentence .= $third;
echo "The final sentence is: " . $sentence . "<br>";




