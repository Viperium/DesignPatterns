<?php

namespace designPatterns\Behavioral\Strategy;

class Email implements ValidationInterface
{
    protected $value, $name;

    public function __construct(string $value, string $name)
    {
        $this->value = $value;
        $this->name = $name;
    }

    public function validate(): string
    {
        if (!filter_var($this->value, FILTER_VALIDATE_EMAIL)) {
            return "$this->value field is not a valid E-mail.";
        }
        return '';
    }

}