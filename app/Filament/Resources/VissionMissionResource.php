<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VissionMissionResource\Pages;
use App\Filament\Resources\VissionMissionResource\RelationManagers;
use App\Models\VissionMission;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VissionMissionResource extends Resource
{
    protected static ?string $model = VissionMission::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-trending-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                RichEditor::make('visi')
                    ->required(),
                RichEditor::make('misi')
                    ->required(),
                Repeater::make('photos')
                    ->relationship('photos')
                    ->schema([
                        FileUpload::make('photo')
                            ->required()
                    ])->maxItems(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visi')->html(),
                TextColumn::make('misi')->html(),
                ImageColumn::make('photos.photo')
                    ->label('Photos')
                    ->circular(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVissionMissions::route('/'),
            'create' => Pages\CreateVissionMission::route('/create'),
            'edit' => Pages\EditVissionMission::route('/{record}/edit'),
        ];
    }

    public static function canCreate(): bool
    {
        return VissionMission::count() < 1;
    }
}
