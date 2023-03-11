<?php

// For inheritance, extends keyword is used

    class greeting {
        var $name = "Jack";

        function user(){
            echo "I Am the First User";
        }
    }

    class greeting2 extends greeting {        

    }

    $x = new greeting2();
    echo $x->name;

?>