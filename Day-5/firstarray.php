<?php
//Numerical array
//Method1
    $a[0] = 10;
    $a[1] = 20;
    $a[2] = 20.20;
    $a[3] = "C";
    $a[4] = "4";
//Method2 //Index Dynamic Array
    $a[] = 10;
    $a[] = 20;
    $a[] = 20.50;
    $a[] = "C";
    $a[] = "4";
//Method3
    $a = array(10,20,20.50,"C","C++");
//Print array value
    echo $a[3];
//Print whole array
    for($i=0;$i< count($a);$i++){
        echo "<br/>".$a[$i];
    }
foreach($a as $value){
    echo "<br/>Value is $value";
}
foreach ($a as $key => $value){
    echo "<br/>Key is <b>$key</b> and Value is <b>$value</b>";
}

//Inbuilt functions tdebug array
    echo "<br/><prev>";
    print_r($a);
    echo "<prev>";
    echo "<br/><prev>";
    var_dump($a);
    echo "<prev>";
    
?>