<?php
$connection = mysqli_connect("localhost","root","","db_internship");
if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:table3.php");
}
$editid = $_GET['id'];

$editq = mysqli_query($connection,"select * from tbl_student where st_id='{$editid}'") or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);

if($_POST){
    $name = $_POST['txt1'];
    $gender = $_POST['txt2'];
    $mobile = $_POST['txt3'];
    $dob = $_POST['txt4'];
    $email = $_POST['txt5'];
    $password = $_POST['txt6'];
    $address = $_POST['txt7'];
    $area = $_POST['txt8'];
    $blodgroup = $_POST['txt9'];
    
    $uq = mysqli_query($connection, "update tbl_student set st_name='{$txt1}', st_gender='{$txt2}',st_mobile='{$txt3}',st_dob='{$txt4}',st_email='{$txt5}',st_password='{$txt6}' ,st_address='{$txt7}',st_area='{$txt8}',st_blodgroup='{$txt9}'where user_id='{$editid}'") or die(mysqli_error($connection));
            
    if($uq){
        echo "<script>alert('Record Updated'); window.loction='table3.php';</script>";
    }
}
?>
<html>
    <body> <center>
        <h1>Student Registration form</h1>
        
        <form method="post">
            <table>
     
                <tr>
                    <td>Name:</td>
                    <td><input type="text" value="<?php echo $editdata['st_name']; ?>" name="txt1"/><br/></td>
             
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>Male<input type="radio" <?php if($editdata['st_gender']=="Male"){echo "checked";} ?> value="Male" name="txt2"/>
                     Female<input type="radio" <?php if($editdata['st_gender']=="Female"){echo "checked";} ?> value="Female" name="txt2"/></td>
             
                </tr>
                <tr>
                    <td>Mobile No:</td>
                    <td><input type="number" value="<?php echo $editdata['st_mobile'];?>" name="txt3"/><br/></td>
             
                </tr>
                <tr>
                    <td> DOB :</td>
                    <td><input type="date" value="<?php echo $editdata['st_dob'];?>" name="txt4"/><br/></td>
             
                </tr>
                <tr>
                    <td> Email:</td>
                    <td><input type="email" value="<?php echo $editdata['st_email'];?>" name="txt5"/><br/></td>
             
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" value="<?php echo $editdata['st_password'];?>" name="txt6"/><br/></td>
             
                </tr>
                 <tr>
                    <td>Address:</td>
                    <td><input type="text" value="<?php echo $editdata['st_address'];?>" name="txt7"/><br/></td>
             
                </tr>
                 <tr>
                    <td>Area:</td>
                    <td>Ahmadabad<input type="radio" <?php if($editdata['st_area']=="Ahmadabad"){echo "checked";} ?> value="Ahmadabad" name="txt8"/>
                     Surat<input type="radio" <?php if($editdata['st_area']=="Surat"){echo "checked";} ?> value="Surat" name="txt8"/>
                    Gandhinagar<input type="radio" <?php if($editdata['st_area']=="Gandhinagar"){echo "checked";} ?> value="Gandhinagar" name="txt8"/>
                     Baroda<input type="radio" <?php if($editdata['st_area']=="Baroda"){echo "checked";} ?> value=" Baroda" name="txt8"/>
                      Nadiyad<input type="radio" <?php if($editdata['st_area']=="Nadiyad"){echo "checked";} ?> value="Nadiyad" name="txt8"/>
                    
                    
                    </td>
             
                </tr>
                 <tr>
                    <td>BlodGroup: </td>
                    <td>
                        A-<input type="checkbox" <?php if($editdata['st_blodgroup']=="A-"){echo "checked";} ?> value="A-" name="txt9"/>
                        A+<input type="checkbox" <?php if($editdata['st_blodgroup']=="A+"){echo "checked";} ?> value="A+" name="txt9"/>
                        B-<input type="checkbox" <?php if($editdata['st_blodgroup']=="B-"){echo "checked";} ?> value="B-" name="txt9"/>
                        B+<input type="checkbox" <?php if($editdata['st_blodgroup']=="B+"){echo "checked";} ?> value="B+" name="txt9"/>
                        AB-<input type="checkbox" <?php if($editdata['st_blodgroup']=="AB-"){echo "checked";} ?> value="AB-" name="txt9"/>
                        AB+<input type="checkbox" <?php if($editdata['st_blodgroup']=="AB+"){echo "checked";} ?> value="AB+" name="txt9"/>
                        O+<input type="checkbox" <?php if($editdata['st_blodgroup']=="O+"){echo "checked";} ?> value="O+" name="txt9"/>
                        O-<input type="checkbox" <?php if($editdata['st_blodgroup']=="O-"){echo "checked";} ?> value="O-" name="txt9"/>
                   </td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"/></td>
                   
                </tr> 
    
            </table>
       </form>
        <a href='table3.php'>Display Record</a>
         </center>
   
    </body>
</html>