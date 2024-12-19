<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use App\Filament\Resources\AboutUsResource;
use App\Models\AboutUs;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutUs extends CreateRecord
{
    protected static string $resource = AboutUsResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make()
                ->createAnother(AboutUs::count() < 1)
        ];
    }
}
