<?php

/* Factory Pattern */
class Apple
{

    private $name;
    private $country;
    private $amount;
    const  BR = '<br />';

    public function __construct(string $name,string $country,int $amount)
    {
        $this->name = $name;
        $this->country = $country;
        $this->amount = $amount;
    }

    public function getNameAndCountry(): string
    {
        return $this->name . ' - ' . $this->country . self::BR;
    }

    public function getAmount(): string
    {
        return 'Amount: ' . $this->amount . self::BR;
    }

    public function addAmount(int $amount): string
    {
        $this->amount += $amount;
        return 'New amount: ' . $this->amount. self::BR . self::BR;
    }
}

class AppleFactory
{
    public static function create(string $name, string $country, int $amount): Apple
    {
        return new Apple($name,$country, $amount);
    }
}

// Creating new Apple and filling in data
$apple1 = AppleFactory::create('Fuji', 'Japan',50);
$apple2 = AppleFactory::create('Jonagold', 'USA',30);

// Showing return strings from Apple Class
echo $apple1->getNameAndCountry() . $apple1->getAmount() . $apple1->addAmount(20);
echo $apple2->getNameAndCountry() . $apple2->getAmount() . $apple2->addAmount(40);