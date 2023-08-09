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
// define("Mularray", array(array("Volvo", 22, 18), array("BWM", 15, 13), array("Saab", 5, 7), array("Lang Rover", 17, 15)));
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

?>
