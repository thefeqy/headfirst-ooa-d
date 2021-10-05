<?php

namespace App;

class FindGuitarTest
{
    public function find() {

        $inventory = new Inventory();
        self::initializeInventory($inventory);

        $whatErinLikes = new Guitar('', 0, 'Octavi', '2016', 'Runner', 'Zan', 'Wood');

        $guitar = $inventory->search($whatErinLikes);

        return $guitar;
    }

    private static function initializeInventory(Inventory $inventory) {
        $inventory->addGuitar('dsadas8980dsa', 1500.52, 'Octavi', '2016', 'Runner', 'Zan', 'Wood');
        $inventory->addGuitar('dsa45eqw46eqw', 2000.52, 'Sando', '2020', 'Runner', 'Zan', 'Wood');
    }
}
