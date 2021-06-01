<?php
    //Associative array
    //Key=Value
    //Method1
    $a[0] = 10;
    $a['c'] = "computer";
    $a['php'] = "Web Development";
    $a[10] = "Ten";
    $a[50] = 50.50;
//Method2
//Always use this method to create array
    $a = array(
        0 => 10,
        "c" => "computer",
        "php" => "web development",
        10 => "Ten",
        50 => 50.50
    );
//Print value
    echo "C for ".$a['c'];
    foreach ($a as $value) {
        echo "<br/>Value is $value";
    }
    foreach ($a as $key => $value) {
        echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
    }
    
?>