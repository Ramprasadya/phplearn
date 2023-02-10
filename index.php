<?php
echo "Hello world";
// Variable ....
// Variable are case sensitive ... 
$name = "Ram";
$income = 2000;
echo "this guy is $name his income is Rs.$income ";

// Boolean data type  : for showing true and false need to use  :-  var_dump
$t = true;
$f = false ;

echo var_dump($t);
echo var_dump($f);

// Array used to store multiplle value in a single variable....

$arr = array("ram" , "sita" , "shyam");

echo $arr[0];

// String Methods 

echo "<br>";

$names = "ramprasad";
echo $names;
echo "<br>";

// strlen Method use to get the string length ;

echo strlen($names);
echo "<br>";

echo "The name is $names" . " And the length is " .strlen($names);
echo "<br>";

// Reverse the text strrev() ..

echo strrev($names);

// searching the string  ;

echo "<br>";

// echo strpos($names , "ad")

echo "<br>";

echo str_replace("ramprasad", "lankaVaranasi", $names);

echo "<br>";

echo str_repeat($names, 15);

echo "<br>";

$a = 23;
$b = 23;

echo ($a + $b);  //Arithmatic Oprerator 

echo "<br>";

echo $a+= 0;  // Assignment Operator ;

echo "<br>";

echo var_dump($a == $b); // Comparison Operator ;

echo "<br>";

// If-Else  condition ;

$c = 26;
$d = 4;


if($c>$d){
	echo " a is greater than  b ";
}
else{
	echo "b is greater than a";
}

echo "<br>";

if($c>25){
	echo "You  can drive";
}else{
	echo "You can not drive";
}

echo "<br>";

// Switch case statement ;

$age = 20;
switch ($age) {
	case 12:
		echo "Your age is 12 year old ";
		break;
	case 20:
	    echo "Your age is 20 year old";
	    break;
	default:
		echo "Your age is weired!";
		break;
}
echo "<br>";

// LOOPS 
// While loop ;

$i=0;
while($i<10){
	echo $i;
	echo "<br>";
	$i++;
}

echo "<br>";

// For Loops  ; 

for ($i=0; $i < 5; $i++) { 
	echo "<br>";
	echo "Your number is $i ";
}

echo "<br>";

// For-each loop ;

$arr = array("banana" , "mango", "apples" , "gavava" , "bread" , "paneer");

foreach($arr as $value){
	echo "$value<br>";
}

echo "<br>";

// Function in php ;

$rohan = [23,34,5,6,23,43,4,54];

function marks($markArr){
  $sum = 0 ;
  foreach($markArr as $value){
  	$sum += $value;
  }
  return $sum;
}

$sumMark = marks($rohan);

$harry = [23,34,34,54,56,56];
$sumh = marks($harry);

echo "your marks is $sumMark";
echo "<br>";
echo "Your marks is $sumh";

echo "<br>";

$d = date("d m y l");
echo "Date is $d";
echo "<br>";

$da = date("h i s a");
echo "The time is $da";


?>