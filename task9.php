<?php 
 //   $start = microtime(true);

    function prime($dividend){     
        global $start;    
        $result = "prime";
        for($i=2;$i<=sqrt($dividend);$i++)
            if($dividend%$i==0)
                $result = "composite";
        echo $result.'<br>';
 //       echo 'Время выполнения скрипта: '.round(microtime(true) - $start, 4).' сек.';
    }
    
    $a=readline();
    prime($a,2);
?>