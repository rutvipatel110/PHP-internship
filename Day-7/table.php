<?php
     $host = "localhost";
     $username = "root";
     $passwd = "";
     $dbname = "db_data";
     $connection = mysqli_connect($host,$username,$passwd,$dbname);
     $q = mysqli_query($connection,"select * from tbl_user where is_delete = 0") or die(mysqli_error($connection));
     echo "<table border = '1'>";
     echo "<tr>";
     echo "<th>ID</th>";
     echo "<th>NAME</th>";
     echo "<th>GENDER</th>";
     echo "<th>DOB</th>";
     echo "<th>EMAIL</th>";
     echo "<th>MOBILE</th>";
     echo "<th>ADDRESS</th>";
     echo "<th>PASSWORD</th>";
     echo "<th>AREA</th>";
     echo "<th>PINCODE</th>";
     echo "<th>ACTION</th>";
     echo "</tr>";
    while($row = mysqli_fetch_array($q)){
            echo "<tr>";
            echo "<td>{$row['user_id']}</td>";
            echo "<td>{$row['user_name']}</td>";
            echo "<td>{$row['user_gender']}</td>";
            echo "<td>{$row['user_dob']}</td>";
            echo "<td>{$row['user_email']}</td>";
            echo "<td>{$row['user_mobile']}</td>";
            echo "<td>{$row['user_address']}</td>";
            echo "<td>{$row['user_password']}</td>";
            echo "<td>{$row['user_area']}</td>";
            echo "<td>{$row['user_pincode']}</td>";
            echo "<td><a href='delete.php?deleteid={$row['user_id']}'>DELETE</a></td>";
            echo "</tr>";
    }
    echo "</table>";
    echo "<a href='connection.php'>ADD RECORD</a>";
?>