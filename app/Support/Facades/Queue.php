<?php

namespace App\Support\Facades;
use App\Support\QueueService;
use Illuminate\Support\Facades\Facade;

class MyQueue extends Facade

{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */

    protected static function getFacadeAccessor()
    {
        return 'MyQueue';
    }
}
