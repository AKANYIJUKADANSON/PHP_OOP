<?php

    class animal {

        // Methods inside here
        // Methods are just functions inside a class

        function getAnimalData(){
            echo "I am a goat";
        } 

    }

    /**
     * Class instantiation is creating the instance of an object in memory
     * So An instance is used to run or call to use a class
     * 
     * a class is instantiated using the keyword "new"
     * 
     * IE $object = new [class-name]
     */


     $animal = new animal();
     $goat = $animal->getAnimalData();

    
?>