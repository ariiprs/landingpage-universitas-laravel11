<?php

namespace App\Filament\Resources\CategoryLecturerResource\Pages;

use App\Filament\Resources\CategoryLecturerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCategoryLecturer extends EditRecord
{
    protected static string $resource = CategoryLecturerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
