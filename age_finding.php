<?php

function age_finder($age){
    if($age<=12){
        echo"You are  child";
    }
    else if($age>=13 && $age<=19){
        echo" you are  Teenager";

    }
    else if($age>=20 && $age<=25){
        echo" you are Young";

    }
    else if($age>=26 && $age<=50){
        echo" you are Adult";

    }
    else{
        echo "you are Old";
        
    }


}
age_finder(73);











?>