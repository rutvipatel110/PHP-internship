<?php
 $host = "localhost";
 $username = "root";
 $passwd = "";
 $dbname = "db_data";
 $connection = mysqli_connect($host,$username,$passwd,$dbname);

    $id = $_GET['deleteid'];
    $q = mysqli_query($connection,"update tbl_user set is_delete = 1 where user_id='{$id}'") or die(mysqli_error($connection));
    if($q){
        echo "<script>alert('Record deleted');window.location='table.php';</script>";
    }
?>