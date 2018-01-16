<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/16/18
 * Time: 9:20 AM
 */

    $animals[0] = "panda";
    $animals[1] = "alpaca";
    $animals[2] = "boa";

    printAnimals($animals);
    echo "<br />adding goat...<br />";
    $animals = addAnimal($animals, "goat");
    printAnimals($animals);
    echo "<br />adding Boa...<br />";
    $animals = addAnimal($animals, "Boa");
    printAnimals($animals);

    function printAnimals ($animals){
        sort($animals);
        for($i = 0; $i < count($animals); $i++){
            echo $animals[$i] . " ";
        }
    }
    function addAnimal ($animalsArray, $animal){
        $animal = strtolower($animal);
        for($i = 0; $i < count($animalsArray); $i++){
            if($animalsArray[$i] == $animal) {
                return $animalsArray;
            }
        }
        array_push($animalsArray, $animal);
        return $animalsArray;
    }


    //print_r($animals);

//    echo $animals[1] . $animals[2] . $animals[0];
//    echo "<br>adding " . $animals[3] . "...<br>";
//    echo $animals[1] . $animals[2] . $animals[3] . $animals[0];
//    echo "<br>adding " . $animals[2] . "...<br>";
//    echo $animals[1] . $animals[2] . $animals[3] . $animals[0];