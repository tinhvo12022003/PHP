<?php

//using file_get_contents to read file json
//json_decode to decode json file contents into array
    $jsonfile = 'test.json';
    $json = file_get_contents($jsonfile);
    $arr = json_decode($json, true);

    foreach($arr as $key => $value){
        echo $key . ': ' . $value . "\n";
    }


//array to translate json file
    $content = [
        "America" => "Washington DC",
        "Japan" => "Tokyo",
        "India" => "New Delhi",
        "China" => "Beijing",
        "Vietnam" => "Hanoi"
    ];

    $jsonData = json_encode($content); //encode to json file
    $result = file_put_contents($jsonfile, $jsonData); //write json file
?>