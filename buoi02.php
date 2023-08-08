<?php
// define("PI", 3.14);
// ECHO PI;



#DEFINE ARRAY
//type 1
// $car = ["Volvo", "BWM", "Toyota"];
// var_dump($car);
// //type 2
// define("cars", ["Volvo", "BWM", "Toyota"]); 
// var_dump(cars);


//greeting is global scope
// define("Greeting", "Welcome to W3School.com");

// function myTest(){
//     echo Greeting . "!\n";
// }

// myTest();
//output: Welcome to W3School.com!
// echo Greeting;
//output: Welcome to W3School.com


// $a = 10;
// $b = '10';
//echo $a == $b . "\n";

// if($a !== $b){
//     echo "a is equal to b";
// } else {
//     echo "a is not equal to b";
// }

// $a = 10;
// $b = 11;
// echo $a <> $b . "\n";
// != and <> is the same

# COMPARE
#type 1
// $x = 1;
// $y = 2;
// $max = ($x > $y) ? $x : $y;
// echo $max;

#type 2
// $h = 10;
// $g = 20;
// echo $h <=> $g;


// $text1 = "hello";
// $text2 = "world";
#echo $text1 . " " . $text2; output "Hello world"
#$text1 .= $text2; $text1 = "hello world";
 
#CONDITION
// $a = rand(10, 100);
// $b = rand(10, 100);
// if ($a > $b) {
//     echo $a . " is greater than " . $b;
// } elseif($a == $b){
//     echo $a . " is equal to " . $b;
// } else {
//     echo $a . " is less than " . $b;
// }

#Enter data from keyboard
// $name = readline("Enter your name: ");
// echo $name;


#SWITCH - CASE
// $day = readline("Enter day: ");
// switch ($day) {
//     case 1:
//         echo "Monday";
//         break;
//     case 2:
//         echo "Tuesday";
//         break;
//     case 3:
//         echo "Wednesday";
//         break;
//     case 4:
//         echo "Thursday";
//         break;
//     case 5:
//         echo "Friday";
//         break;
//     case 6:
//         echo "Saturday";
//         break;
//     case 7:
//         echo "Sunday";
//         break;
//     default:
//         break;
// }


#WHILE LOOP
//$x1 = 1;
// while($x1 <= 10){
//     echo $x1 . "\n";
//     $x1++;
// }

#DO-WHILE
// $x2 = 1;
// do {
//     echo $x2 . " ";
//     $x2 += 1;
// } while($x2 < 10);


#FOR LOOP
// for($x1 = 0; $x1 < 100; $x1++){
//     if($x1 % 2 == 0){
//         echo $x1 . " ";
//     }
// }

#FOREACH
// define("colors", ["red", "green", "blue", "yellow"]);
// foreach(colors as $value){
//     echo $value . " "; 
// }


?>