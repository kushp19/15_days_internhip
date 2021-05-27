<?php

echo "<table border='1'>";
for($i=0;$i<=10;$i++){
    echo "<tr>";
    if($i%2==0){
         echo "<td bgcolor='lightgreen'>$i</td>";
    }else{
         echo "<td bgcolor='lightblue'>$i</td>";
    }
   
echo "</tr>";
  }

 echo "</table>";
 ?>

