<?php 
    function power($num,$pow){     
        if ($pow==0) return 1;
        $pow--;
        $num=$num*power($num,$pow);    
        return $num;  
    }    
    $a=readline();
    $n=readline();
    echo power($a,$n);
?>