<?php
//Method 1
$k[0] = 50;
$k[1] = 66;
$k[2] = 50.78;
$k[3] = "Akashtechnolab";
$k[4] = "90";

//Method 2
$k[] = 50;
$k[] = 67;
$k[] = 50.78;
$k[] = "Akashtechnolab1";
$k[] = "100";

//Method 3
//THIS IS ALWAYS CREATE AN ARRaY
$k = array(50,66,50.78,56.40,"Akashtechnolab","Internship",80.90,"SUMMER");

echo $k[0];

//Print whole array
for($s=0; $s< count($k);$s++){
    echo "<br/>".$k[$s];
}

?>