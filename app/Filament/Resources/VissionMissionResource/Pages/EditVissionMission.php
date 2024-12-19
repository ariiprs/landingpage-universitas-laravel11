<?php

namespace App\Filament\Resources\VissionMissionResource\Pages;

use App\Filament\Resources\VissionMissionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVissionMission extends EditRecord
{
    protected static string $resource = VissionMissionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
