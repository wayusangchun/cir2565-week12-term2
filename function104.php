<?php
    //PHP Closures
    $anony = function(){
        return"lambda";
    };
    //Closures
    print(get_class($anony));
    print "<br/ >";
    //object
    print(gettype($anony));
?>