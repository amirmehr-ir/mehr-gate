<?php

namespace Amirmehr\MehrGate;

use Illuminate\Support\Facades\Facade;

class MehrGateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mehrGate';
    }
}
