<?php

    // Constructors aaree functtiions but tthe nname starts wthh
    // two underrscorec folwd by key word costruct i.e __construct(){}
    // constructors run automatically when the class is instanciated
    // for destruct we use __destruct(){}


    class greeting {
        function __construct(){
            echo "I Am the First User";
        }
    }

    $x = new greeting();
    // $x->gree
?>