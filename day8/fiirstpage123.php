<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Online Auction </title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
include './themepart/menu.php';
include './themepart/logo.php';
?>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
            <div><img src="Auctionphoto.jpg" width="920" height="420" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">WELCOME TO OUR ONLINE AUCTION</a></h2>
				
				<div style="clear: both;">&nbsp;</div>
				<div class="entry">
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
                                    <a href='table3.php'>Display Record</a>
				</div>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
                <?php 
                include './themepart/sidebar.php';
                ?>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<?php
                include './themepart/footer.php';
?>
</body>
</html>


