<?php

use designPatterns\Behavioral\Strategy\Validator;

require __DIR__ . './../../vendor/autoload.php';

function strategy()
{
    $request = [
        [
            'name' => 'email',
            'value' => 'notvalid@',
            'rules' => 'email|required'
        ],
        [
            'name' => 'price',
            'value' => '123',
            'rules' => 'numeric|required'
        ],
        [
            'name' => 'quantity',
            'value' => '',
            'rules' => 'numeric|required'
        ]
    ];

    $errors = Validator::validate($request);

    var_dump($errors);
}

strategy();