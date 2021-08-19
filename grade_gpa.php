<?php
function grade_finder($number){
    if($number>=80 && $number<=100){
        echo "Your Grade is A+"." and CGPA is 4.00";
        
     }
     else if($number>=75 && $number<=79 ){
        echo "Your Grade is A"." and CGPA is 3.75 ";
     
     }
     else if($number>=70 && $number<=74 ){
        echo "Your Grade is A-"." and CGPA is 3.50 ";
     
     }
     else if($number>=65 && $number<=69 ){
        echo "Your Grade is B+"." and CGPA is 3.25 ";
     
     }
     else if($number>=60 && $number<=64 ){
        echo "Your Grade is B"." and CGPA is 3.00 ";
     
     }
     else if($number>=55 && $number<=59 ){
        echo "Your Grade is B-"." and CGPA is 2.75 ";
     
     }
     else if($number>=50 && $number<=54 ){
        echo "Your Grade is C+"." and CGPA is 2.50 ";
     
     }
     else if($number>=45 && $number<=49 ){
        echo "Your Grade is C"." and CGPA is 2.25";
     
     }
     else if($number>=40 && $number<=44 ){
        echo "Your Grade is D"." and CGPA is 2.00";
     
     }
     else if($number>=0 && $number<=39 ){
        echo "Your Grade is F"." and CGPA is 0.0";
     
     }
     else{
        echo "Out of Range";
     
     }
     
     

}
grade_finder(70);







?>