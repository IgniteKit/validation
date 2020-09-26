<?php

namespace IgniteKit\Validation\Rules;

use IgniteKit\Validation\Rule;

class Present extends Rule
{
    /** @var bool */
    protected $implicit = true;

    /** @var string */
    protected $message = "The :attribute must be present";

    /**
     * Check the $value is valid
     *
     * @param mixed $value
     * @return bool
     */
    public function check($value): bool
    {
        return $this->validation->hasValue($this->attribute->getKey());
    }
}
