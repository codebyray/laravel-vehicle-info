<?php

namespace Codebyray\LaravelVehicleInfo;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codebyray\LaravelVehicleInfo\Skeleton\SkeletonClass
 */
class LaravelVehicleInfoFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-vehicle-info';
    }
}
