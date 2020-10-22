<?php 
    $a= readline("Введите число");
    while($a%2 === 0 && $a > 1){
        $a=$a/2;
    }         
    echo ($a===1)?"YES":"NO";  
?>