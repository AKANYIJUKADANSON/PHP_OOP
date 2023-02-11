<?php
    // Syntax: class className{}
    class xxx {

    }

    $myclasses = get_declared_classes();
    foreach($myclasses as $class){
        echo $class. "<br>";
    }
?>