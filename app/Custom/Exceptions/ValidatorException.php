<?php

namespace Custom\Exceptions;

use Throwable;

class ValidatorException extends \Exception
{
    protected $errors;

    public function __construct(string $message, $errors, int $code = 0, Throwable $previous = null)
    {
        $this->errors = $errors;

        parent::__construct($message, $code, $previous);
    }

    public function getErrors() {
        return $this->errors;
    }
}
