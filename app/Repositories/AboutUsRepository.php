<?php

namespace App\Repositories;

use App\Models\AboutUs;
use App\Repositories\Contracts\AboutUsRepositoryInterface;

class AboutUsRepository implements AboutUsRepositoryInterface
{
    public function getAllAboutUs()
    {
        return AboutUs::latest()->get();
    }
}
