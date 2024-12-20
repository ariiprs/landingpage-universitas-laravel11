<?php

namespace App\Repositories;

use App\Models\Lecturer;
use App\Repositories\Contracts\LecturerRepositoryInterface;

class LecturerRepository implements LecturerRepositoryInterface
{
    public function getAllLecturers()
    {
        return Lecturer::latest()->get();
    }
}
