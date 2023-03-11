<?php
    // members inside a class are accessed using the
    // $this function

    class animals{
        // To create a member in the class we use the key word var
        var $animalType = "Pet";
        
        function registerAnimals(){
            return $this->animalType;
        }
    }


    $x  = new animals();
    echo $x->registerAnimals();
    
?>