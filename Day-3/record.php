<?php
if(isset($_POST['s']))////checking whether the input element is set or not
{
    $a=$_POST['t1']; //accessing value from 1st text box
    $a1=$_POST['t2']; //accessing value from 2nd text field
    $a2=$_POST['t3']; //accessing value from 3rd text field
    $a3=$_POST['t4']; //accessing value from 4th text field
    $a4=$_POST['t5']; //accessing value from 5th text field
    $a5=$_POST['t6']; //accessing value from 6th text field
    $sum=$a1+$a2+$a3+$a4+$a5; //total marks
    $avg=($sum/5);
    if($avg>=0&&$avg<=50)
        $grade="Fail";
    if($avg>50&&$avg<=70)
        $grade="C";
    if($avg>70&&$avg<=80)
        $grade="B";
    if($avg>80&&$avg<=100)
        $grade="A";
    echo "<centre><h1>Name is $a</h1></centre><br/>";
    echo "<centre>Physics marks :$a1</centre><br/>";
    echo "<centre>Chemistry marks :$a2</centre><br/>";
    echo "<centre>Maths marks :$a3</centre><br/>";
    echo "<centre>English marks :$a4</centre><br/>";
    echo "<centre>Computer marks :$a5</centre><br/>";
    echo "<centre>Total is <b>$sum</b></centre><br/";
    echo "<centre>Percentage is $avg</centre>";
    echo "<centre>Grade is $grade</centre>";
    

   }
            ?>
       