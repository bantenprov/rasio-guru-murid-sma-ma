<?php namespace Bantenprov\RasioGMSmaMa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The RasioGMSmaMa facade.
 *
 * @package Bantenprov\RasioGMSmaMa
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RasioGMSmaMa extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'rasio-guru-murid-sma-ma';
    }
}
