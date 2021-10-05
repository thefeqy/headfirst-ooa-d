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

    public function search(GuitarSpecs $searchGuitar): array
    {
        $matchingGuitars = [];
        foreach ($this->guitars as $guitar) {

            $guitarSpecs = $guitar->guitarSpecs;

            $builder = $searchGuitar->getBuilder();
            if (! is_null($builder) && $builder != $guitarSpecs->getBuilder()) { // Builder
                continue;
            }

            $model = strtolower($searchGuitar->getModel());
            if (! is_null($model) && $model != strtolower($guitarSpecs->getModel())) { // Model
                continue;
            }

            $type = $searchGuitar->getType();
            if (! is_null($type) && $type != $guitarSpecs->getType()) { // Type
                continue;
            }

            $backWood = $searchGuitar->getBackWood();
            if (! is_null($backWood) && $backWood != $guitarSpecs->getBackWood()) { // Back Wood
                continue;
            }

            $topWood = $searchGuitar->getTopWood();
            if (! is_null($topWood) && $topWood != $guitarSpecs->getTopWood()) { // Top Wood
                continue;
            }

            $matchingGuitars[] = $guitar;
        }

        return $matchingGuitars;
    }
}
