<?php
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
<html>
    <body>
        <form method = "post">
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
            <input type="submit"/>
        </form>
    </body>
</html>
<a href='table.php'>DISPLAY RECORD</a>