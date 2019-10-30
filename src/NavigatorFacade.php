<?php

namespace Marcusmyers\Navigator;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Marcusmyers\Navigator\Skeleton\SkeletonClass
 */
class NavigatorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'navigator';
    }
}
