<?php

namespace App;

class GuitarSpecs
{
    public string $builder;
    public string $model;
    public string $type;
    public string $backWood;
    public string $topWood;

    public function __construct(string $builder, string $model, string $type, string $backWood, string $topWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
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
