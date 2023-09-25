<?php

    //sử dụng truyền mảng 
    $a = function(?int ...$d) : int{
        $count = 0;
        foreach($d as $c){
            $count += $c;
        }
        return $count;
    };

    echo $a(1,2,3,4,5);

    //đối số mặc định
    $add = function(?int $a = 1, ?int $b =1):int {
        return $a + $b;
    };



    $a = fn(?int $a = 0, ?int $b = 1) => $a + $b;
    echo "\n" . $a(1,2);
    echo "\n" . $a();

    //sử dụng từ khóa use
    $b = function(?int $c = 1) use ($add) : int {
        return $c + $add(4, 6);
    };
    echo "\n" . $b(4);
?>