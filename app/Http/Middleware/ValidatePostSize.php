<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\ValidatePostSize as Middleware;

class ValidatePostSize extends Middleware
{
    /**
     * The maximum post size in bytes.
     *
     * @var int
     */
    protected $maxPostSize = 0;
}
