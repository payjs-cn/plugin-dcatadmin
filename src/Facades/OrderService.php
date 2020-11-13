<?php
namespace Payjs\Payjs\Facades;

use Illuminate\Support\Facades\Facade;

class OrderService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Payjs\Payjs\Services\OrderService::class;
    }
}
