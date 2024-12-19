<?php

namespace App\Filament\Resources\CategoryLecturerResource\Pages;

use App\Filament\Resources\CategoryLecturerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategoryLecturers extends ListRecords
{
    protected static string $resource = CategoryLecturerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
