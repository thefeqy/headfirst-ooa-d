<?php

namespace App;

class FindGuitarTest
{
    public function find() {

        $inventory = new Inventory();
        self::initializeInventory($inventory);

        $whatErinLikes = new Guitar('', 0, 'Octavi', '2016', 'Runner', 'Zan', 'Wood');

        $guitar = $inventory->search($whatErinLikes);

        if($guitar) {
            echo "Erin, you might like this guitar: \n" .
                $guitar->getBuilder() . " " . $guitar->getModel() . " " .
                $guitar->getType() . " guitar:\n   " .
                $guitar->getBackWood() . " Back and sides, \n   ".
                $guitar->getTopWood() . " Top \n you can have it for only $" . 
                $guitar->getPrice() . "!\n ----------- \n";
        } else {
            echo "Sorry, Erin, we have nothing for you.";
        }
    }

    private static function initializeInventory(Inventory $inventory) {
        $inventory->addGuitar('dsadas8980dsa', 1500.52, 'Octavi', '2016', 'Runner', 'Zan', 'Wood');
        $inventory->addGuitar('dsa45eqw46eqw', 2000.52, 'Sando', '2020', 'Runner', 'Zan', 'Wood');
    }
}
