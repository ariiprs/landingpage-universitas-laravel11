<?php

namespace App\Filament\Resources\GreetingResource\Pages;

use App\Filament\Resources\GreetingResource;
use App\Models\Greeting;
use Filament\Actions;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\CreateRecord;

class CreateGreeting extends CreateRecord
{
    protected static string $resource = GreetingResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make()
                ->createAnother(Greeting::count() < 1)
        ];
    }
}
