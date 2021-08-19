<?php

$arr = ['Taz','Mim','ARi','Tansen','Sam'];
$cars = array('BMW','Toyota','Volvo');
for($i=0;$i<count($arr);$i++){
    echo"{$arr[$i]}"."<br>";

}


print_r($cars);
echo"<br>";

//associative arrays

$age = ['petr'=>35,'ben'=>24,'virat'=>21];
echo"<pre>";
var_dump($age);
echo"</pre>";





?>