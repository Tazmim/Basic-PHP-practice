<?php   
//Constant
define('country','Bangladesh');

$name = "Tazmim";
$age = 24;
$skill = "PHP developer";



echo "My name is {$name} I am {$age} years old and I am a {$skill} and I am from ".country;
echo"<br>";
//magic constant
echo __DIR__;
echo"<br>";
echo __FILE__;
echo"<br>";
echo __LINE__;
echo "<br>";
//isset 
if(isset($name)){
    echo "okay";
}
else{
    echo"not okay";
}
echo "<br>";
//empty

if(empty($name)){
    echo "Empty";
}
else{
    echo"Not Empty";
}
//Die

echo "My Name is Tazmim <br>";
echo "My Name is Tazmim <br>";
echo "My Name is Tazmim <br>";
echo "My Name is Tazmim <br>";

//switch case




















?>