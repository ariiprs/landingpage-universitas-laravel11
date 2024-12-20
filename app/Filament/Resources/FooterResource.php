<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterResource\Pages;
use App\Filament\Resources\FooterResource\RelationManagers;
use App\Models\Footer;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FooterResource extends Resource
{
    protected static ?string $model = Footer::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('address')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->required()
                    ->email(),

                TextInput::make('gmaps')
                    ->required()
                    ->url(),

                TextInput::make('phone_number')
                    ->required()
                    ->tel(),

                TextInput::make('youtube')
                    ->nullable()
                    ->url(),

                TextInput::make('linkedin')
                    ->nullable()
                    ->url(),

                TextInput::make('facebook')
                    ->nullable()
                    ->url(),

                TextInput::make('instagram')
                    ->nullable()
                    ->url(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('address')
                ->label('Address')
                ->words(5),
                TextColumn::make('email'),
                TextColumn::make('gmaps'),
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
            'index' => Pages\ListFooters::route('/'),
            'create' => Pages\CreateFooter::route('/create'),
            'edit' => Pages\EditFooter::route('/{record}/edit'),

        ];
    }
}
