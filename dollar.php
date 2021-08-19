<?php

function converter($taka,$country){
    if($country=='USA'){
        $c = $taka*84.42;
        echo "$c";
       
    }
    else if($country=='canada'){
        $c = $taka*68;
        echo "$c";

    }
    else if($country=='canada'){
        $c = $taka*118.42;
        echo "$c";

    }
}
converter(10,'USA');





?>