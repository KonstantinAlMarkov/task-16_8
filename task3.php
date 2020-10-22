<?php 
    $year = readline("Введите первое число:");
    echo((($year%4 === 0)&&(!($year%100 === 0)))||($year%400 === 0))?"YES":"NO";   
?>