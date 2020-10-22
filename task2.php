<?php 
    $a = readline("Введите первое число:");
    $b = readline("Введите второе число:");
    $c = readline("Введите третье число:");   
    $d=$a;
    if ($d < $b){$d = $b;}
    if($d < $c) {$d = $c;}
    echo $d;  
?>