<?php
$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
$f = $_POST['txt6'];
echo "<br>C marks:$a</br>";
echo "<br>C++ marks:$b</br>";
echo "<br>JAVA marks:$c</br>";
echo "<br>PHP marks:$d</br>";
echo "<br>PYTHON marks:$e</br>";
echo "<br>CSS marks:$e</br>";

echo "<br><b>TOTAL MARKS:</b>".($total=$a+$b+$c+$d+$e+$f);
echo "    out of 600";

$per=($total/600.00)*100;
echo "<br><b>Percentage:</b>$per";

if($per>=80)
{
    $grade= "Firstclass";
}elseif ($per>=70) {
    $grade="Secondclass";
}elseif ($per>=45) {
    $grade="Thirdclass";
} else {
    $grade="Fail";    
}
echo "<br><b>Student grade:</b>$grade";

?>