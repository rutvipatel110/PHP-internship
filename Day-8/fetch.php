<?php
     $host = "localhost";
     $username = "root";
     $passwd = "";
     $dbname = "db_data";
     $connection = mysqli_connect($host,$username,$passwd,$dbname);
     $q = mysqli_query($connection,
     "select * from tbl_user") 
     or die(mysqli_error($connection)) ;
     $row = mysqli_fetch_array($q);
     echo "<pre>";
     print_r($row);
     echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9];
     echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_dob'].$row['user_email'].$row['user_mobile'].$row['user_address'].$row['user_password'].$row['user_area'].$row['user_pincode'];

?>