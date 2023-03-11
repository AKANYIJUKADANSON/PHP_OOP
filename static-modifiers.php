<?php

// With static, a member or method can be declared using the keyword static
// member: static $x, 
// function/Method: static 

    class greeting {
        static $name = "Jack";
        static $greetings = "Goodmorning";

        static function user(){
            // every member inside a static function must be staticly accessed too
            echo greeting::$greetings;
            echo ", I Am the First User";
        }
    }


    // class greeting2 extends greeting {        

    // }

    // A static variable is accessed by using the "::" 
    // No need to instatiate the class to access a static member or function
    // for the variable the "$" is kept
    // Also the function is access using the "::"
    
    // echo greeting::$name;
    echo greeting::user();

?>