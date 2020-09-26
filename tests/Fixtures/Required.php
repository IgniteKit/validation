<?php

namespace IgniteKit\Validation\Tests;

use IgniteKit\Validation\Rule;

class Required extends Rule
{

    public function check($value): bool
    {
        return true;
    }
}
