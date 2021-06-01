<?php
$connection = mysqli_connect("localhost","root","","db_internship");

 if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $dob = $_POST['txt4'];
    $email = $_POST['txt5'];
    $password = $_POST['txt6'];
    $address = $_POST['txt7'];
    $area = $_POST['txt8'];
    $bloodgroup = $_POST['txt9'];
    
    
    $k = mysqli_query($connection, "insert into tbl_student(st_name,st_gender,st_mobile,st_dob,st_email,st_password,st_address,st_area,st_blodgroup) values('{$name}','{$gender}','{$mobile}','{$dob}','{$email}','{$password}','{$address}','{$area}','{$bloodgroup}')") or die(mysqli_error($connection));
    if($k){
        echo "<script>alert('Recor Added')</script>";
    }
 }
?>

<html>
    <body>
         <center>
        <h1>Student Registration form</h1>
        
        <form method="post">
            <table>
     
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="txt1"/><br/></td>
             
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td><select name="txt2">
                <option>Male</option>
                <option>Female</option>
            </select><br/></td>
             
                </tr>
                <tr>
                    <td>Mobile No:</td>
                    <td><input type="number" name="txt3"/><br/></td>
             
                </tr>
                <tr>
                    <td> DOB :</td>
                    <td><input type="date"  name="txt4"/><br/></td>
             
                </tr>
                <tr>
                    <td> Email:</td>
                    <td><input type="email" name="txt5"/><br/></td>
             
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="txt6"/><br/></td>
             
                </tr>
                 <tr>
                    <td>Address:</td>
                    <td><input type="text" name="txt7"/><br/></td>
             
                </tr>
                 <tr>
                    <td>Area:</td>
                    <td><select name="txt8">
                <option>Ahmadabad</option>
                <option>Surat</option>
                <option>Gandhinagar</option>
                <option>Baroda</option>
                <option>Nadiyad</option>
            </select><br/></td>
             
                </tr>
                 <tr>
                    <td>BlodGroup: </td>
                    <td><select name="txt9">
                <option>A-</option>
                <option>A+</option>
                <option>B-</option>
                <option>B+</option>
                <option>AB-</option>
                <option>AB+</option>
                <option>O+</option>
                <option>O-</option>
                </select><br/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"/></td>
                   
                </tr> 
    
            </table>
       </form>
         </center>
            
    </body>       
</html>


