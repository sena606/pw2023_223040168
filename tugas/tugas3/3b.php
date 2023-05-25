<?php 
 
 
 function urutanAngka($angka){
    $D = 1;
    for($A = 1; $A <= $angka; $A++){
        for($J = 1; $J <= $A; $J++){
            echo $D . " ";
            $D++;
        }
        echo "<br>";
    }
 }

 urutanAngka(5);

?>