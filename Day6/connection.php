<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
// connection function
$connection = mysqli_connect($host, $username, $passwd,$dbname);

$k = mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile) values('Akash sir','Male','987654321')") 
        or die("Error".mysqli_error($connection));

if($k)
{
    echo "<script>alert('Record Added')</script>";
}

?>
