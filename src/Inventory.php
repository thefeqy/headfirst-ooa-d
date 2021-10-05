<?php

namespace App;

class Inventory
{
    private array $guitars = [];

    public function addGuitar(string $serialNumber, float $price, string $builder, string $model, string $type, int $numStrings, string $backWood, string $topWood): void
    {
        $specs = new GuitarSpecs($builder, $model, $type, $numStrings, $backWood, $topWood);
        $guitar = new Guitar($serialNumber, $price, $specs);

        $this->guitars[] = $guitar;
    }

    public function getGuitar(string $serialNumber)
    {
        foreach ($this->guitars as $guitar)
            if ($guitar->serialNumber == $serialNumber)
                return $guitar;

        return null;
    }

    public function search(GuitarSpecs $searchSpecs): array
    {
        $matchingGuitars = [];
        foreach ($this->guitars as $guitar) {
            if ($guitar->getSpec()->matches($searchSpecs))
                $matchingGuitars[] = $guitar;
        }

        return $matchingGuitars;
    }
}
