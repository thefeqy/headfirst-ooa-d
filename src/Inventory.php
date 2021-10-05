<?php

namespace App;

class Inventory
{
    private array $guitars = [];

    public function addGuitar(string $serialNumber, float $price, string $builder, string $model, string $type, string $backWood, string $topWood): void
    {
        $guitar = new Guitar($serialNumber, $price, $builder, $model, $type, $backWood, $topWood);

        $this->guitars[] = $guitar;
    }

    public function getGuitar(string $serialNumber)
    {
        foreach ($this->guitars as $guitar)
            if ($guitar->serialNumber == $serialNumber)
                return $guitar;

        return null;
    }

    public function search(Guitar $searchGuitar)
    {
        foreach ($this->guitars as $guitar) {

            $builder = $searchGuitar->getBuilder();
            if (! is_null($builder) && $builder != $guitar->getBuilder()) { // Builder
                continue;
            }

            $model = $searchGuitar->getModel();
            if (! is_null($model) && $model != $guitar->getModel()) { // Model
                continue;
            }

            $type = $searchGuitar->getType();
            if (! is_null($type) && $type != $guitar->getType()) { // Type
                continue;
            }

            $backWood = $searchGuitar->getBackWood();
            if (! is_null($backWood) && $backWood != $guitar->getBackWood()) { // Back Wood
                continue;
            }

            $topWood = $searchGuitar->getTopWood();
            if (! is_null($topWood) && $topWood != $guitar->getTopWood()) { // Top Wood
                continue;
            }

            return $guitar;
        }

        return null;
    }
}
