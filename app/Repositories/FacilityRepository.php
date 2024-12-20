<?php

namespace App\Repositories;

use App\Models\Facility;
use App\Repositories\Contracts\FacilityRepositoryInterface;

class FacilityRepository implements FacilityRepositoryInterface
{
    public function getAllFacilities()
    {
        return Facility::latest()->get();
    }
}