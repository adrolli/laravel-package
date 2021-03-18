<?php

namespace TallUI\TalluiPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TallUI\TalluiPackage\TalluiPackage
 */
class TalluiPackageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tallui-package';
    }
}
