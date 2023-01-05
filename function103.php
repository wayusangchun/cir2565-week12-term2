<?php 
//Anonymouse function
$message = "Hello!";
   $hi = function ($name)use($message){
        return array($message, $name);
     };

     //$msg = $hi("Mark");
     //print($msg[0].$msg[1].$msg[2]);
     [$message,$name,$age] = $hi("Mark");
     print($message . $name . ", Age: $age");
?>  