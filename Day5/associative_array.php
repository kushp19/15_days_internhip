<?php

//associative array
//Method 1
$k[0] = 50;
$k['c'] = "DOG";
$k['php'] = "Web development PHP";
$k[6] = "six";
$k[12] = 65.78;

//Method 2
$k = array(
    0 => 10,
    "c" => "DOG",
    "php" => "Web development PHP",
    6 => "six",
    12 => 65.78
);

echo "c for".$k['c'];

foreach ($k as $value) {
    echo "<br/>Value is $value";
    
}
foreach ($k as $key => $value) {
    echo "<br/>Key is <b>$key </b> and value is <b>$value</b>";
}
?>


