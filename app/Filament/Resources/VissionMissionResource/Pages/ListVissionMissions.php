<?php

namespace App\Filament\Resources\VissionMissionResource\Pages;

use App\Filament\Resources\VissionMissionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVissionMissions extends ListRecords
{
    protected static string $resource = VissionMissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
