<?php

namespace IgniteKit\Validation\Rules;

use IgniteKit\Validation\Rule;

class Accepted extends Rule
{
    /** @var bool */
    protected $implicit = true;

    /** @var string */
    protected $message = "The :attribute must be accepted";

    /**
     * Check the $value is accepted
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        $acceptables = ['yes', 'on', '1', 1, true, 'true'];
        return in_array($value, $acceptables, true);
    }
}
