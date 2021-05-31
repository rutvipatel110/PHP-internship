<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Palindrome in PHP</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    $input="MADAM";
    echo '<h1>Input string :</h1>'.$input;
    $reverse=strrev($input);
    echo '<br><h1>Reversed string :</h1>'.$reverse;
    if($input===$reverse){
        echo '<br><h1>Your string is palindrome</h1>';
    }
    else{
        echo '<br><h1>Your string is not palindrome</h1>';
    }
?>
        <script src="" async defer></script>
    </body>
</html>