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
    echo "<br />";

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
    $cupcakes = array("grasshopper"=>"The Grasshopper",
    "maple"=>"Whiskey Maple Bacon",
    "carrot"=>"Carrot Walnut",
    "caramel"=>"Salted Caramel Cupcake",
    "velvet"=>"Red Velvet",
    "lemon"=>"Lemon Drop",
    "tiramisu"=>"Tiramisu",
    );
?>