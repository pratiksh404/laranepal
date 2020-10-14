<?php

namespace Pratiksh\LaraNepal;

use Illuminate\Support\Facades\Facade;

class LaraNepalFacade extends Facade
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
