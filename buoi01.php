<?php
$a = "this is text 1";
$b = "this is text 2";
echo "$a" ." ".  "$b";

#var_dump($a);
$MinValue = PHP_INT_MIN;
$MaxValue = PHP_INT_MAX; 
echo $MinValue."\n";
echo $MaxValue; #limit

$MinValueFloat = PHP_FLOAT_MIN;
$MaxValueFoat = PHP_FLOAT_MAX;
echo $MinValueFloat."\n";
echo $MaxValueFoat;


$a = 10.19232;
var_dump($a); #float

$x = true;
$y = false;
echo $x;

$x = NULL;
var_dump($x); //NULL


$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

#$x = PHP_FLOAT_DIG;
#là một hằng số trong PHP, đại diện cho số chữ số chính xác tối đa mà một số floating-point có thể đảm bảo trong hệ thống.

$x = PHP_FLOAT_EPSILON;
echo $x;
#2.2204460492503E-16


//Infinity
// $x = 1.9e411;
// var_dump($x);


//Not a Number
// $x = acos(8);
// var_dump($x);

// $x = 5985;
// var_dump(is_numeric($x));

// $x = "5985";
// var_dump(is_numeric($x));

// $x = "59.85" + 100;
// var_dump(is_numeric($x));

// $x = "Hello";
// var_dump(is_numeric($x));


// $a = 19023.08123;
// echo (int)$a; 


//echo pi();  #3.141592653589793

// echo min(5, 1, 5, 7, 1, 6, 2);
// echo max(4, 1, 7, 4, 7, 2, 5);

#echo abs(-4.12);

echo sqrt(64);

echo round(1.3514);
echo round(1.7421);
echo round(1.5712);

echo rand(0, 100);

define("GREETING", "Hello", true);
echo GREETING;

define("PI", 3.14);
echo PI;

#ép kiểu trong PHP
$n = 10.5;
echo $n . "\n"; //10.5
echo (int)$n; //10


//phạm vi của biến
//global scope

/*
sử dụng từ khóa global
*/

$a = 10;
function print_val(){
    global $a;
    echo $a; //output 10
}

//local scope
//static scope, giá trị của nó được giữ lại trong các lần gọi hàm


?>