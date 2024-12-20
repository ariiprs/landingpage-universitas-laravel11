<?php

namespace App\Repositories;

use App\Models\Partnership;
use App\Repositories\Contracts\PartnershipRepositoryInterface;

class PartnershipRepository implements PartnershipRepositoryInterface
{
    public function getAllPartnerships()
    {
        return Partnership::latest()->get();
    }
}
