<?php

namespace designPatterns\Creational\SimpleFactory;

class VehicleFactory
{
    public static function getVehicle($type): AbstractVehicle {
        switch ($type) {
            case 'Supercars':
                return new Supercars(['Ferrari','Lamborghini','Porsche','McLaren']);

            case 'Luxurious':
                return new Luxurious(['BMW','Audi','Mercedes','Bentley']);

            case 'Low-Cost':
                return new LowCost(['Fiat','Ford','Renault']);

            default:
                throw new \Exception('Type is not valid');
        }
    }
}