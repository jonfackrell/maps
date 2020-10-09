<?php

namespace Jonfackrell\Maps;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jonfackrell\Maps\Skeleton\SkeletonClass
 */
class MapsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'maps';
    }
}
