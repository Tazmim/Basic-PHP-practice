<?php

$emp = [
    [1,"Taznim",'Student',500000],
    [2,"Tansen",'Student',400000],
    [3,"Sorif",'Student',200000],
    [4,"Taznim",'Student',100000]
    
];
//printing with for loop

for($row=0;$row<4;$row++){
    for($col=0;$col<4;$col++){
        echo"{$emp[$row][$col]} "."  ";
    }
    echo"<br>";
    
}
echo"<br>";
echo"<br>";
echo"<br>";

//printing with foreach loop

echo"<table border=1px>";

echo"<tr>";
foreach($emp as $val1){
    foreach($val1 as $val2){
        echo"<td>";
        echo" {$val2}"."  ";
        echo"</td>";
    }
    echo"</tr>";
    echo"<br>";
}
echo"</table>";







?>