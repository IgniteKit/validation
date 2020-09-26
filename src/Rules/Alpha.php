<?php

namespace IgniteKit\Validation\Rules;

use IgniteKit\Validation\Rule;

class Alpha extends Rule
{

    /** @var string */
    protected $message = "The :attribute only allows alphabet characters";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return is_string($value) && preg_match('/^[\pL\pM]+$/u', $value);
    }
}
