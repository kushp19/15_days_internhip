<html>
    <body>
    <center>
        <h1>Registration form</h1>
   
        <form action="registrationform2.php" method="post" >
            <table>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="txt1"/></td>
                </tr>
                <tr>
                    <td>Second Name</td>
                    <td><input type="text" name="txt2"/></td>
                </tr>
                <tr>
                    <td>Age</td>
                    <td><input type="number" name="txt3"/></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="txt4"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="txt5"/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td><input type="radio" name="txt6" value="Male">Male
                        <input type="radio" name="txt6" value="FeMale">Female
                        <input type="radio" name="txt6" value="Other">other
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="date" name="txt7"/></td>
                </tr>
                <tr>
                    <td><input type="submit" value="submit"/></td>
                    <td><input type="Reset"/></td>
                </tr>
            </table>
        </form>
    </center>
    </body>
</html>
