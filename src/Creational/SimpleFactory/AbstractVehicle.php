<?php

namespace designPatterns\Creational\SimpleFactory;

abstract class AbstractVehicle
{
    protected $cars = [];

    public function __construct(array $cars)
    {
        $this->cars = $cars;
    }

    abstract public function call();
}