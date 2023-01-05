<?php
//1.closure function
    $sum = function($a,$b){
        return array($a,$b);
    };
    [$a,$b] = $sum(10,5);
    print($a+$b . "<br />");

    //2.Arrow function
    $result = function($a,$b)=>$a,$b;
    $total = $result(10,5);
    print($total);

    //3.Arrow function
    $division = fn($a,$b)=>array($a,$b);
    [$a,$b] = $division(50,5);
    print($a/$b);
    //4.Arrow function
    $multply = fn($a,$b)=>array($a,$b);
    [$a,$b] = $multiply(100,2);
    pritnt($a/$b);

?>