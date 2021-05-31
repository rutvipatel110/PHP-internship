<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Leap year in php</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    $year=1990;
    if ($year%400 == 0) {
        echo '<br><h1>It is leap year</h1>'.$year;
    }
    if($year%4 == 0){
        echo '<br><h1>It is leap year</h1>'.$year;
    }
    elseif($year%100 == 0){
        echo '<br><h1>It is not leap year</h1>'.$year;
    }
    else{
        echo '<br><h1>It is not leap year</h1>'.$year;
    }
?>
        <script src="" async defer></script>
    </body>
</html>