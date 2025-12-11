<?php

namespace HiCharly\LaravelDepshield\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \HiCharly\LaravelDepshield\LaravelDepshield
 */
class LaravelDepshield extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \HiCharly\LaravelDepshield\LaravelDepshield::class;
    }
}
