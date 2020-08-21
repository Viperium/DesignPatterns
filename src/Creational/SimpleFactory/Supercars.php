<?php

namespace designPatterns\Creational\SimpleFactory;

class Supercars extends AbstractVehicle
{
    public function call()
    {
        return 'A ' . $this->cars[array_rand($this->cars)] . ' is coming to get you! (supercars)';
    }
}