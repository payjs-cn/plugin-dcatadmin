<?php
namespace Payjs\Payjs\Facades;

use Illuminate\Support\Facades\Facade;

class PayjsService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Payjs\Payjs\Services\PayjsService::class;
    }
}
