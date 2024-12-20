<?php
namespace App\Repositories;

use App\Models\Registration;
use App\Repositories\Contracts\RegistrationRepositoryInterface;

class RegistrationRepository implements RegistrationRepositoryInterface
{
    public function create(array $data)
    {
        return Registration::create($data);
    }
}