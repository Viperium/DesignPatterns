<?php

namespace designPatterns\Creational\SimpleFactory;

class Luxurious extends AbstractVehicle
{
    public function call()
    {
        return 'A ' . $this->cars[array_rand($this->cars)] . ' is coming to get you! (luxurious)';
    }
}