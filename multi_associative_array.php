<?php

$marks = [
    'Tazmim'=>['physics'=>85,'chemestry'=>90,'math'=>100],
    'Sagor'=>['physics'=>85,'chemestry'=>90,'math'=>100],
    'Tushar'=>['physics'=>85,'chemestry'=>90,'math'=>100]

];

foreach($marks as $key=>$v1)
{
    echo $key."  =   ";

    foreach($v1 as $v2){
        echo"{$v2}"."  ";

    }
    echo"<br>";


}


















?>