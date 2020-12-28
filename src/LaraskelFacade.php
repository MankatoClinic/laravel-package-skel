<?php

namespace MCDev\Laraskel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MCDev\Laraskel\Laraskel
 */
class LaraskelFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Laraskel';
    }
}
