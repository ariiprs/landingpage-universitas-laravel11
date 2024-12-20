<?php

namespace App\Repositories;

use App\Models\Footer;
use App\Repositories\Contracts\FooterRepositoryInterface;

class FooterRepository implements FooterRepositoryInterface
{
    public function getAllFooters()
    {
        return Footer::all();
    }
}