<!DOCTYPE html>
<html>
<?php 
    //Database connection
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $dbname = "db_data";
    $connection = mysqli_connect($host,$username,$passwd,$dbname);
    if($_POST){
        $id = $_POST['txt1'];
        $name = $_POST['txt2'];
        $gender = $_POST['txt10'];
        $dob = $_POST['txt3'];
        $email = $_POST['txt4'];
        $number = $_POST['txt5'];
        $address = $_POST['txt6'];
        $password = $_POST['txt7'];
        $area = $_POST['txt8'];
        $pincode = $_POST['txt9'];
        
    $q = mysqli_query($connection,
        "insert into tbl_user(user_id,user_name,user_gender,user_dob,user_email,user_mobile,user_address,user_password,user_area,user_pincode) values('{$id}','{$name}','{$gender}','{$dob}','{$email}','{$number}','{$address}','{$password}','{$area}','{$pincode}')") 
        or die(mysqli_error($connection)) ;
        if($q){
            echo "<script>alert('Record added');</script>";
        }
    }
?> 
<head>
    <title>Contact form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100%;
            padding: 0;
            margin: 0;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
        }

        h1 {
            margin: 0 0 20px;
            font-weight: 400;
            color: #1c87c9;
        }

        p {
            margin: 0 0 5px;
        }

        .main-block {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #1c87c9;
        }

        form {
            padding: 25px;
            margin: 25px;
            box-shadow: 0 2px 5px #f5f5f5;
            background: #f5f5f5;
        }

        .fas {
            margin: 25px 10px 0;
            font-size: 72px;
            color: #fff;
        }

        .fa-envelope {
            transform: rotate(-20deg);
        }

        .fa-at,
        .fa-mail-bulk {
            transform: rotate(10deg);
        }

        input,
        textarea {
            width: calc(100% - 18px);
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #1c87c9;
            outline: none;
        }

        input::placeholder {
            color: #666;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            background: #1c87c9;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
        }

        button:hover {
            background: #2371a0;
        }

        @media (min-width: 568px) {
            .main-block {
                flex-direction: row;
            }

            .left-part,
            form {
                width: 50%;
            }

            .fa-envelope {
                margin-top: 0;
                margin-left: 20%;
            }

            .fa-at {
                margin-top: -10%;
                margin-left: 65%;
            }

            .fa-mail-bulk {
                margin-top: 2%;
                margin-left: 28%;
            }
        }
    </style>
</head>

<body>
    <div class="main-block">
        <div class="left-part">
            <i class="fas fa-envelope"></i>
            <i class="fas fa-at"></i>
            <i class="fas fa-mail-bulk"></i>
        </div>
        <form action="#" method="POST">
            <h1>Contact Us</h1>
            <div class="info">
            Id :<input type="number" name="txt1"required/><br/>
            Name :<input type="text" name="txt2"required/><br/>
            Gender :<select name="txt10">
            <option>Male</option>
            <option>Female</option>
            </select><br/>
            Date of Birth :<input type="date" name="txt3" required/><br/>
            Email :<input type="email" name="txt4" required/><br/>
            Mobile number :<input type="number" name="txt5" required/><br/>
            Address :<input type="text" name="txt6"required/><br/>
            Password :<input type="password" name="txt7" required/><br/>
            Area :<input type="text" name="txt8" required/><br/>
            Pincode :<input type="number" name="txt9" required/><br/>
            <input type="submit" value="REGISTER"/>
        </div>
        </form>
    </div>
</body>
</html>