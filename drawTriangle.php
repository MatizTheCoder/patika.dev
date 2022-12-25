<?php

function drawTriangle($number){
    for($i = 0; $i <= $number; $i++){
       
        $j=0;
            
            while($j <= $i){
                $j++;
                echo $j * 0; 
            }  
         echo "<br>";
    }

}

drawTriangle(15)

?>