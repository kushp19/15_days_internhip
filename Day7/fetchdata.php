<?php
//DB connection
$connection = mysqli_connect("localhost","root","","db_internship");
//Query
$k = mysqli_query($connection,"select * from tbl_user") or die(mysqli_error($connection));
//bellow funtion will fetch data as numerica array
$row = mysqli_fetch_row($k);
//debug
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
//Numerical and Associative
$row = mysqli_fetch_array($k);
echo "<pre>";
print_r($row);
echo $row[0].$row[1].$row[2].$row[3];
echo $row['user_id'].$row['user_name'].$row['user_gender'].$row['user_mobile'];
 
?>