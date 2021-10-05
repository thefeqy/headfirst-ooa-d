<?php

namespace App;

class Guitar
{
    public string $serialNumber;
    public float $price;
    public string $builder;
    public string $model;
    public string $type;
    public string $backWood;
    public string $topWood;


    public function __construct(string $serialNumber, float $price, string $builder, string $model, string $type, string $backWood, string $topWood)
    {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
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
     * Get the value of builder
     */
    public function getBuilder()
    {
        return $this->builder;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Get the value of backWood
     */
    public function getBackWood()
    {
        return $this->backWood;
    }

    /**
     * Get the value of topWood
     */
    public function getTopWood()
    {
        return $this->topWood;
    }
}
