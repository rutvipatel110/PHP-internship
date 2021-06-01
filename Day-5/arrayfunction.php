<?php
//array count
    $a = array('php','c','c++','java','Android');
    echo count($a);
//count values
    $a = array("C","php","c","android","php","java");
    $b = array_count_values($a);
    foreach ($b as $key => $value){
        echo "<br/>$key - <strong>$value</strong>";
    }
//sum
    $a = array(1,2,3,4,5);
    echo "<br/>".array_sum($a);
//product
    $a = array(1,2,3,4,5);
    echo "<br/>".array_product($a);
//reverse
    $a = array('c','c++','java','android','php');
    $reverse = array_reverse($a);
    echo "<br/>";
    print_r($reverse);
//in_array
    $a= array('c','c++','java','android','php');
    $temp = in_array('php',$a);
    echo "<br/>";
    echo $temp;
//random
    $a = array('c','c++','java','android','php');
    $index = array_rand($a);
    echo "<br/>";
    echo $a[$index];
//unique
    $a = array('c','c++','android','java','android','php');
    echo "<br/>";
    print_r(array_unique($a));
//merge
    $a = array('c','c++','java','android','php');
    $b = array(1,2,3,4,5);
    $c = array_merge($a,$b);
    echo "<br/>";
    print_r($c);
//search
    $a = array('c','c++','java','android','php');
    $b = array_search('android',$a);
    echo "<br/>".$b;
//range
    $a = range("11","20");
    foreach($a as $key => $value){
        echo "<br/> $key - $value";
    }
//sort
    $a = array(8,6,3,5,1,2,9);
    sort($a);
    echo "<br/>";
    print_r($a);
//rsort
    $a = array(8,6,3,5,1,2,9);
    rsort($a);
    echo "<br/>";
    print_r($a);
//asort
    $a = array(8,6,3,5,1,2,9);
    asort($a);
    echo "<br/>";
    print_r($a);
//ksort
    $a = array(
        "Mango" => "Green",
        "Apple" => "Red"
    );
    ksort($a);
    foreach ($a as $key => $value) {
        echo "<br/>$key - $value";
    }
//krsort
    $a = array(
        "Mango" => "Green",
        "Apple" => "Red"
    );
    krsort($a);
    foreach ($a as $key => $value) {
        echo "<br/>$key - $value";
    }
//shuffle
    $a = array("boxing","gaming","baseball","tennis");
    shuffle($a);
    foreach ($a as $key => $value) {
        echo "<br/> $value";
    }
//key exists
    $a = array("a"=>"apple","b"=>"banana");
    echo "<br/>";
    echo array_key_exists('a',$a);
//change key
    $a = array(
        "Banana" => "Yellow",
        "Apple" => "Red",
        "Mango" => "Green"
    );
    $b = array_change_key_case($a,CASE_UPPER);
    echo "<br/>";
    print_r($b);
//combine
    $a = array("Banana","Apple","MAngo");
    $b = array("Yellow","Red","Green");
    $c = array_combine($a,$b);
    echo "<br/>";
    print_r($c);
//end
    $a = array('c','c++','android','java','php');
    echo "<br/>".end($a);
//compact 
    $a = "rutvi";
    $b = "patel";
    $c = compact("a","b");
    echo "<br/>";
    print_r($c);
//flip
    $a = array("a"=>"apple","b"=>"Banana","C"=>"computer");
    $b = array_flip($a);
    echo "<br/>";
    print_r($b);
//difference
    $a = array("c","c++","java","php","android");
    $b = array("c","java","php");
    $c = array_diff($a,$b);
    echo "<br/>";
    print_r($c);
//intersect
    $a = array(0=>"sunday",1=>"monday",2=>"tuesday");
    $b = array(3=>"wednesday",4=>"thursday",5=>"tuesday") ;
    echo "<br/>";
    print_r(array_intersect($a,$b));
//values 
    $a = array("i"=>"c","want"=>"c++","learn"=>"php");
    $b = array_values($a);
    foreach($b as $key => $value){
        echo "<br/> $key => $value";
    }
//push
    $a = array("c","c++");
    array_push($a,"java","php");
    echo "<br/>";
    print_r($a);
//pop
    $a = array("c","c++","java","php");
    array_pop($a);
    echo "<br/>";
    print_r($a);
    array_pop($a);
    echo "<br/>";
    print_r($a);
//explode
    $a = "I love PHP programming";
    $b = explode(" ",$a);
    echo "<br/>";
    print_r($b);
//implode
    $a = array("i","love","php","programming");
    $b = implode(" ",$a);
    echo "<br/>".$b;
?>