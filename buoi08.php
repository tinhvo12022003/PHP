<?php
    #using date() method in PHP
    //echo date("Y-m-d H:i:s a"); 
    // echo date("Y/m/d H:i:s a");
    // echo date("d.m.Y H:i:s a");

    #get a timezone
    //lấy thời gian ở khu vực hiện tại
    // date_default_timezone_set("Asia/Ho_Chi_Minh");
    // echo date("Y-m-d H:i:s a");


    #Create a date with mktime()
    // $d = mktime(11, 14, 54, 8, 12, 2014);
    // echo date("Y-m-d H:i:s a", $d);

//     $timeset = mktime(8, 21, 59, 12, 8, 2023);
//     echo date("Y-m-d H:i:s a", $timeset);

    #using strtotime()
    // $d = strtotime("10:30:36pm April 15 2014");
    // echo date("Y-m-d H:i:s a", $d);

    // $d = strtotime("tomorrow"); //next day
    // echo date("Y-m-d H:i:s a", $d);
    // $e = strtotime("yesterday Sunday");
    // echo date("Y-m-d H:i:s a", $e);
    // $f = strtotime("+2 months");
    // echo date("Y-m-d H:i:s a", $f);

    // $now = strtotime("Monday");
    // $_6months_later = strtotime("+7 weeks");
    // while($now < $_6months_later){
    //     echo date("Y-m-d H:i:s a", $now)."\n";
    //     $now = strtotime("+1 weeks", $now);
    // }


    
 ?>