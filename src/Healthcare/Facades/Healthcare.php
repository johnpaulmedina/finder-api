<?php

namespace Healthcare\Facades;

use Illuminate\Support\Facades\Facade;

class Healthcare extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'healthcare'; }

}
