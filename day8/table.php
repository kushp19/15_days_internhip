<?php
//DB connection
$connection = mysqli_connect("localhost","root","","db_internship");
//Query
$k = mysqli_query($connection,"select * from tbl_user where is_delete = 0 ") or die(mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Gender</th>";
echo "<th>Mobile</th>";
echo "<th>Action</th>";
echo "</tr>";
$i=0;
while($row = mysqli_fetch_array($k)){
    $i++;
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>EDIT</a> | <a href='delete.php?deleteid={$row['user_id']}'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='insertrecord.php'>Add Record</a>";
?>