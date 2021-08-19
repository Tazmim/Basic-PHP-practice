<?php

$i=2;
$j=1;
for($k=1;$k<=10;$k++){
    $res = $i*$k;
    echo "$i*$k = {$res}"."<br>";
    if($k>=10){
        if($i==9){
            break;
        }
        $i++;
        $k=1;
        echo"<br>";
    }
    
}

?>