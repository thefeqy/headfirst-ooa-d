<?php

namespace App;

class Guitar
{
    public string $serialNumber;
    public float $price;
    public GuitarSpecs $guitarSpecs;


    public function __construct(string $serialNumber, float $price, string $builder, string $model, string $type, string $backWood, string $topWood)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->guitarSpecs = new GuitarSpecs($builder, $model, $type, $backWood, $topWood);
    }

    /**
     * Get the value of serialNumber
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of guitarSpecs
     */ 
    public function getGuitarSpecs(): GuitarSpecs
    {
        return $this->guitarSpecs;
    }
}
