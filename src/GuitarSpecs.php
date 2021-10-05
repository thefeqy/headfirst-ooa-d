<?php

namespace App;

class GuitarSpecs
{
    public string $builder, $model, $type, $backWood, $topWood;
    public int $numStrings;

    public function __construct(string $builder, string $model, string $type, int $numStrings, string $backWood, string $topWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->numStrings = $numStrings;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
    }


    public function matches(GuitarSpecs $otherSpec): bool
    {
        if ($this->builder != $otherSpec->builder) { // Builder
            return false;
        }

        if ($this->model != $otherSpec->model) { // model
            return false;
        }

        if ($this->type != $otherSpec->type) { // type
            return false;
        }

        if ($this->backWood != $otherSpec->backWood) { // backWood
            return false;
        }

        if ($this->topWood != $otherSpec->topWood) { // topWood
            return false;
        }

        return true;
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
     * Get the value of numStrings
     */ 
    public function getNumStrings()
    {
        return $this->numStrings;
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
