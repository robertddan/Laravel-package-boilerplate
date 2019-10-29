<?php

namespace Suiteziel\Vendor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Suiteziel\Vendor\Skeleton\SkeletonClass
 */
class VendorFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'vendor';
    }
}
