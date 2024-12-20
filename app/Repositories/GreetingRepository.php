<?php

namespace App\Repositories;

use App\Models\Greeting;
use App\Repositories\Contracts\GreetingRepositoryInterface;

class GreetingRepository implements GreetingRepositoryInterface
{
    public function getAllGreeting()
    {
        return Greeting::latest()->get();
    }
}
