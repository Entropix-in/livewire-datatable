<?php

namespace Entropix\LivewireDatatable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Entropix\LivewireDatatable\LivewireDatatable
 */
class LivewireDatatable extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Entropix\LivewireDatatable\LivewireDatatable::class;
    }
}
