<?php

namespace designPatterns\Behavioral\Strategy;

class Validator
{
    public static function validate($request)
    {
        $errors = [];

        foreach ($request as $field) {
            $rules = explode('|', $field['rules']);

            foreach ($rules as $rule) {
                $error = '';

                if ($rule === 'email') {
                    $error = (new ValidationStrategy(
                        new Email($field['value'], $field['name'])
                    ))->validate();
                } elseif ($rule === 'numeric') {
                    $error = (new ValidationStrategy(
                        new Numeric($field['value'], $field['name'])
                    ))->validate();
                } elseif ($rule === 'required') {
                    $error = (new ValidationStrategy(
                        new Required($field['value'], $field['name'])
                    ))->validate();
                }

                if ($error) {
                    $errors[$field['name']]['error'][] = $error;
                }
            }
        }

        return $errors;
    }
}