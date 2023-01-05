<?php
 function mutiple($a,$b){
    $sum = $a + $b;
    print("$sum = ". $sum . "<br />");
 }
 mutiple(10,20);

 function add($a,$b){
    return array($a,$b);
    }
    // [$a,$b] =add(100,200);
    // print ("Sum = ". ($a+$b));
    // $sum = add(100,200);
    // print ("Sum= ". $sum[0]+$sum[1]);
    list($a,$b,$c,$d) = add (100,200,300,"Sum = ")
    pritn($d . ($a+$b+$c));
?>