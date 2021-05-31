<?php

//count()

$k = array('A','b','c','d','e','f','h');
echo count($k);
echo "<br/>";
//array_count_values()
$newarr = array_count_values($k);
foreach ($k as $key => $value) {
    echo "<br/>$key - <strong>$value</strong>";
}
echo "<br/>";
//array_sum()

$kd = array(1,2,3,4,5,6,7);
echo array_sum($kd);
echo "<br/>";
 
//array_product()
$kd = array(1,2,3,4,5,6,7);
echo array_product($kd);
echo "<br/>";

//array_reverse()
$kkk = array_reverse($kd);
print_r($kkk);
echo "<br/>";

//in_array
$temp = in_array(5,$kd);
echo $temp;
echo "<br/>";

 //array_rand()
$indexofarray = array_rand($kd);//Returns Array Index 
echo $kd[$indexofarray];
echo "<br/>";

//array_unique()
$arr = array('c', 'c++','android', 'java', 'android', 'php');
print_r(array_unique($arr));
echo "<br/>";

//array_merge()
$arr1 = array('c','c++','android','java','php');
$arr2 = array(10,20,30,40,50);
$NewArr = array_merge($arr1,$arr2);
print_r($NewArr);
echo "<br/>";

//array_search
$myarr = array('c', 'c++','android', 'java', 'php');
$check = array_search('android', $myarr);
echo $check;
echo "<br/>";

//range()
$arr = range("11", "20");
foreach($arr as $key => $value)
{
echo "<br /> $key - $value ";
} 
echo "<br/>";
//sort()
$arr = array(80,60,50,40,8,74);
sort($arr);
print_r($arr);
echo "<br/>";

//rsort()
$arr = array(80,60,50,40,8,74);
rsort($arr);
print_r($arr);
echo "<br/>";

//asort()
$arr = array(80,60,50,40,8,74);
asort($arr);
print_r($arr);
echo "<br/>";

//ksort()
$arr = array(
"Banana" => "Yellow", 
"Apple" => "Red", 
"Mango" => "Green");
ksort($arr);
foreach ($arr as $key => $value) {
echo "<br />$key - $value ";
}


?>

