<?php

namespace App\Repositories;

use App\Models\VissionMission;
use App\Repositories\Contracts\VissionMissionRepositoryInterface;

class VissionMissionRepository implements VissionMissionRepositoryInterface
{
    public function getAllVissionMission()
    {
        return VissionMission::latest()->get();
    }
}
