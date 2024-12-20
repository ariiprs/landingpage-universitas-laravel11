<?php

namespace App\Filament\Resources\PartnershipResource\Pages;

use App\Filament\Resources\PartnershipResource;
use App\Models\Partnership;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;

class CreatePartnership extends CreateRecord
{
    protected static string $resource = PartnershipResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make()
                ->createAnother(Partnership::count() < 5),
        ];
    }
}
