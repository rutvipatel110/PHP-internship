<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Switch case</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <?php
    $number=3;
    switch ($number) {
        case '1':
            echo "You have choose 1";
            break;
        case '2':
            echo "You have choose 2";
            break;
        case '3':
            echo "You have choose 3";
            break;
        case '4':
            echo "You have choose 4";
            break;
        case '5':
            echo "You have choose 5";
            break;
        default:
            echo "Choose between 1-5";
            break;
    }

?>
        <script src="" async defer></script>
    </body>
</html>
