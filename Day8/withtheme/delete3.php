<?php

//DB connection
$connection = mysqli_connect("localhost","root","","db_internship");

$id = $_GET['deleteid'];
//Query
$k = mysqli_query($connection,"delete from tbl_student where st_id='{$id}'") or die(mysqli_error($connection));
//bellow funtion will fetch data as numerica array
if($k)
{
    echo "<script>alert('Record Deleted');window.location='table3.php';</script>";
}
?>