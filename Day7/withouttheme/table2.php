<?php
//DB connection
$connection = mysqli_connect("localhost","root","","db_internship");
//Query
$k = mysqli_query($connection,"select * from tbl_student") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>DOB</th>";
echo "<th>Email</th>";
echo "<th>Password</th>";
echo "<th>Address</th>";
echo "<th>Area</th>";
echo "<th>Blodgroup</th>";
echo "<th>Action</th>";

echo "</tr>";
$i=0;
while($row = mysqli_fetch_array($k)){
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_area']}</td>";
    echo "<td>{$row['st_blodgroup']}</td>";
    echo "<td><a href='delete2.php?deleteid={$row['st_id']}'>delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='withouttheme.php'>Add Record</a>";
?>