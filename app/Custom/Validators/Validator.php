<?php

namespace Custom\Validators;

use Illuminate\Support\Facades\Validator as LaravelValidator;

abstract class Validator
{
    protected $errors;

    public function isValid(array $attributes)
    {
        $validator = LaravelValidator::make($attributes, static::$rules);

        if ($validator->fails()) {
            $this->errors = $validator->messages();

            return false;
        }

        return true;
    }

    public function getErrors() {
        return $this->errors;
    }
}
