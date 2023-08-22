<?php
    function printElements(iterable $arr){
        foreach($arr as $num){
            echo $num. " " ;
        }
        
    }
    
    printElements([1,2,3,4,5]);
    echo "\n";
    function getIterable() : iterable{
        return [1,2,3,4,5];
    }

    $get = getIterable();
    foreach($get as $i){
        echo $i. " ";
    }

    $array = ['apple' => 'red', 'watermelon' => "green", 'orange' => 'orange', 'banana' => 'yellow'];
    foreach($array as $key=>$value) {
        echo "Key: ".key($array). ", value: ".current($array)."\n";
         next($array);
    }

    //current() trỏ đến vị trí hiện tại
    //key() khóa của iterable
    //next() trỏ đến vị trí tiếp theo
    //rewind() trỏ đến vị trí đầu tiên
    //valid() kiểm tra xem iterable còn hợp lệ hay không

    
    $arr = [1, 3, 4, 6, 2];
    echo current($arr);
    next($arr);
    echo current($arr);
    reset($arr);
    echo current($arr);
    
?>