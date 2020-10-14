<?php

namespace Pratiksh\LaraNepal\Facade;

use Illuminate\Support\Facades\Facade;

class LaraNepal extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lara-nepal';
    }
}
