<?php

namespace IgniteKit\Validation\Rules;

use IgniteKit\Validation\Rule;

class Email extends Rule
{

    /** @var string */
    protected $message = "The :attribute is not valid email";

    /**
     * Check $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
