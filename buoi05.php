<?php
#PHP multidimensional arrays


$cars = array(
    array("Volvo", 22, 18),
    array("BWM", 15, 13),
    array("Saab", 5, 7),
    array("Lang Rover", 17, 15)
);

// echo $cars[0][1];


#using define to create array 
define("Mularray", array(array("Volvo", 22, 18), array("BWM", 15, 13), array("Saab", 5, 7), array("Lang Rover", 17, 15)));
// echo Mularray[0][1];

#using for - loop
// for($i=0; $i < count($cars); $i++){
//     for($j=0; $j < count($cars[$i]); $j++){
//         echo $cars[$i][$j] . " ";
//     }
//     echo "\n";
// }


#using foreach - loop
// foreach($cars as $row){
//     foreach($row as $columns){
//         echo $columns . " ";
//     }
//     echo "\n";
// }

#sorting array

sort($cars); // sắp xếp theo thứ tự tăng dần theo number và alphabet

//rsort($cars) //sắp sếp theo thứ tự giảm dần

//asort() //sắp xếp cho mảng kết hợp theo thứ tự giảm gần của values

//ksort() //sắp xếp theo thứ tự tăng dần của mảng kết hợp theo giá trị của keys

//arsort() //ngược lại với asort()

//krsort() //ngược lại với ksort()


#GLOBAL VARIABLES - SUPERGLOBALS
// $GLOBALS
// $_SERVER
// $_REQUEST
// $_POST
// $_GET
// $_FILES
// $_ENV
// $_COOKIE
// $_SESSION

#using $GLOBALS
//can change value of variable
$x = 10;
$y = 90;
function add2Number(){
    $GLOBALS['z'] =  $GLOBALS['x'] + $GLOBALS['y'];
    $GLOBALS['x'] += 10;
}

add2Number();
echo $z . " " . $x . " " . $y;

#using $_SERVER['SELF']
//show current file path
$currentFile = $_SERVER['PHP_SELF'];
echo $currentFile;


#using $_SERVER['PHP_NAME']
//show current name of server
$servername = $_SERVER['SERVER_NAME'];
$absolutePath = "https://". $servername . $currentFile;
echo $absolutePath;

#using $_SERVER['HTTP_HOST']
//show domain name or IP address
echo $_SERVER['HTTP_HOST'];



#using $_SERVER['HTTP_REFERER']
//show the web page where the user accessed previously


#using $_SERVER['HTTP_USER_AGENT']
//show the browser, OS that the user is using

#using $_SERVER['SCRIPT_NAME']
//show the relative path of file is running in the server web
$scriptname = $_SERVER['SCRIPT_NAME'];
echo $scriptname;

echo "\n" . $_SERVER['HTTP_USER_AGENT'];

#else

// $_SERVER['GATEWAY_INTERFACE'];
// $_SERVER['SERVER_ADDR'];
// $_SERVER['SERVER_SOFTWARE'];
// $_SERVER['SERVER_PROTOCOL'];
// $_SERVER['REQUEST_TIME'];
// $_SERVER['QUERY_STRING'];
// $_SERVER['HTTP_ACCEPT'];
// $_SERVER['HTTP_ACCEPT_CHARSET'];
// $_SERVER['HTTPS'];
// $_SERVER['REMOTE_ADDR'];
// $_SERVER['REMOTE_HOST'];
// $_SERVER['REMOTE_PORT'];
// $_SERVER['SERVER_ADMIN'];
// $_SERVER['SCRIPT_FILENAME'];
// $_SERVER['SERVER_PORT'];
// $_SERVER['SERVER_SIGNATURE'];
// $_SERVER['PATH_TRANSLATED'];
// $_SERVER['SCRIPT_URI'];
?>
