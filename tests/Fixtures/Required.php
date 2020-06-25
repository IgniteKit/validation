<?php

namespace DG\Validation\Tests;

use DG\Validation\Rule;

class Required extends Rule
{

    public function check($value): bool
    {
        return true;
    }
}
