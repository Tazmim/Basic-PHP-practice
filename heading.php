<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php



function headig($heading,$type){
    if($type=='h1'){
        echo"<h1>$heading</h1>";
    }
    else if($type=='h2'){
        echo"<h2>$heading</h2>";

    }
    else if($type=='h3'){
        echo"<h3>$heading</h3>";

    }
    else if($type=='h4'){
        echo"<h4>$heading</h4>";

    }
    else if($type=='h5'){
        echo"<h5>$heading</h5>";

    }
    else{
        echo"<h6>$heading</h6>";
    }
   
    
    
}
$a = "hello everone";
$type='h1';

headig($a,$type);

?>
    
</body>
</html>