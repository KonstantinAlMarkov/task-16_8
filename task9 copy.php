<?php 
//    $start = microtime(true);

    function checkIfDivide($dividend,$divider)
    {
        global $start;   
        if($divider>=$dividend) {
            echo "prime".'<br>';}
 //           echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';}
        elseif($dividend%$divider==0) {
            echo "composite".'<br>';}
  //          echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 10).' сек.';}
        else {
            $divider++;
            checkIfDivide($dividend,$divider);
        }
    }  

    $a=readline();
    checkIfDivide($a,2);
?>