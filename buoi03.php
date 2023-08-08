<?php
#FUNCTION

// function familyName($fname){
//     echo $fname;
// }

// familyName("State");



#return  value
// function fullName($fname, $lname){
//     $fullname = $fname . " " . $lname;
//     return $fullname;
// }

// $fullname = fullName("State", "Nguyen");
// echo $fullname;


// function SumNumbers($number1, $number2){
//     return $number1 + $number2;
// }

// echo SumNumbers(10, 20);

//declare(strict_types=1); //kiểm tra kiểu dữ liệu được truyền vào tham số của hàm
//declare không được bật, PHP tự động ép kiểu


// function AreaRectangle($width=0, $height=0){ //tham số mặc định khi không được truyền tham số
//     return $width * $height;
// }

// echo AreaRectangle()."\n";
// echo AreaRectangle(20, 10);



#PHP return type declarations

// function divide(int $a, int $b) : float {
//     return $a / $b;
// }

// echo divide(4, 3)."\n";

#PASSING ARGUMENTS BY REFERENCE
// function swap(&$a, &$b){
//     $temp = $a;
//     $a = $b;
//     $b = $temp;
// }

// $a = 1;
// $b = 2;
// swap($a, $b);
// echo $a." ".$b;
//ảnh hưởng đến biến gốc



?>