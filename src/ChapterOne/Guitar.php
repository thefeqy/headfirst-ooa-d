<?php

namespace App\ChapterOne;

class Guitar
{
    public string $serialNumber;
    public float $price;
    public GuitarSpecs $spec;


    public function __construct(string $serialNumber, float $price, GuitarSpecs $spec)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
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
     * Get the value of spec
     */ 
    public function getSpec()
    {
        return $this->spec;
    }
}
