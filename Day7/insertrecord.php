<?php
$connection = mysqli_connect("localhost","root","","db_internship");

 if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    
    $k = mysqli_query($connection, "insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die(mysqli_error($connection));
    if($k){
        echo "<script>alert('Recor Added')</script>";
    }
 }
?>

<html>
    <body>
        <form method="post">
            Name : <input ype="text" name="txt1" />
            Gender : <select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select>
            Mobile No : <input type="number" name="txt3"/>
            <input type="submit" value="submit"/>
            
       </form>
            
    </body>
    
    
</html>
<a href='table.php'>Display Record</a>

