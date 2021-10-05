<?php

namespace App;

class FindGuitarTest
{
    public function find() {

        $inventory = new Inventory();
        self::initializeInventory($inventory);

        $whatErinLikes = new GuitarSpecs(Builder::FENDER, '2016', Type::ACOUSTIC, 12, Wood::COCOBOLO, Wood::ALDER);

        $matchesGuitars = $inventory->search($whatErinLikes);

        if($matchesGuitars) {
            echo "Erin, you might like these guitars: \n";
            foreach ($matchesGuitars as $guitar) {

                $guitarSpecs = $guitar->spec;
                echo "We've a " .
                $guitarSpecs->getBuilder() . " " . $guitarSpecs->getModel() . " " .
                $guitarSpecs->getType() . " guitar:\n   " .
                $guitarSpecs->getBackWood() . " Back and sides, \n   ".
                $guitarSpecs->getTopWood() . " Top \n you can have it for only $" . 
                $guitar->getPrice() . "!\n ----------- \n";
            }
        } else {
            echo "Sorry, Erin, we have nothing for you.";
        }
    }

    private static function initializeInventory(Inventory $inventory) {
        $inventory->addGuitar('dsadas8980dsa', 1500.52, Builder::FENDER, '2016', Type::ACOUSTIC, 12, Wood::COCOBOLO, Wood::ALDER);
        $inventory->addGuitar('31231454das', 6000.00, Builder::FENDER, '2016', Type::ACOUSTIC, 12, Wood::COCOBOLO, Wood::ALDER);
        $inventory->addGuitar('dsa45eqw46eqw', 2000.52, Builder::GIBSON, '2020', Type::ELECTRIC, 12, Wood::ADIRONDACK, Wood::BRAZILIAN_ROSEWOOD);
    }
}