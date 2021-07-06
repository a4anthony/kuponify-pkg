<?php

namespace A4anthony\Kuponify\Facades;

use Illuminate\Support\Facades\Facade;

class Kuponify extends Facade
{
    /**
     * Get the registered name of the component
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'kuponify';
    }
}