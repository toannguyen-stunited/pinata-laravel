<?php

namespace Pinata\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @author Daniel Isac <daniel@crosstechit.com>
 * @see \Pinata\Client
 */
class Pinata extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'pinata';
    }
}
