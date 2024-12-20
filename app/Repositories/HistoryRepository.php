<?php

namespace App\Repositories;

use App\Models\History;
use App\Repositories\Contracts\HistoryRepositoryInterface;

class HistoryRepository implements HistoryRepositoryInterface
{
    public function getAllHistories()
    {
        return History::latest()->get();
    }
}