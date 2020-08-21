<?php

require __DIR__ . './../../vendor/autoload.php';

use designPatterns\Creational\SimpleFactory\VehicleFactory;

function simpleFactory() {
    $supercars = VehicleFactory::getVehicle('Supercars');
    echo $supercars->call() . '<br />';
    
    $luxurious = VehicleFactory::getVehicle('Luxurious');
    echo $luxurious->call() . '<br />';

    $lowcost = VehicleFactory::getVehicle('Low-Cost');
    echo $lowcost->call() . '<br />';

}

simpleFactory();