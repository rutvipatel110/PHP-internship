<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>If-else in PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    $marks=240;
    echo "<h1>Your marks are :$marks</h1><br/>";
    if($marks>=250){
        echo "<h2>You have passed with distinction</h2>";
    }    
    elseif($marks>150 && $marks<250){
        echo "<h2>You have passed with good marks</h2>";
    }
    else{
        echo "<h2>You should practice more!!</h2>";
    }
?>

        <script src="" async defer></script>
    </body>
</html>