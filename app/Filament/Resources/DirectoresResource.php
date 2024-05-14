<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectoresResource\Pages;
use App\Filament\Resources\DirectoresResource\RelationManagers;
use App\Models\Directores;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DirectoresResource extends Resource
{
    protected static ?string $model = Directores::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre_director')
                    ->required()
                    ->maxLength(60),
                Forms\Components\TextInput::make('apellido_director')
                    ->required()
                    ->maxLength(60),
                Forms\Components\Select::make('CT_GENEROS_genero_id')
                    ->relationship('Generos','nombre_genero')
                    ->required()
                    ->searchable()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre_completo_director')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_director')
                    ->searchable(),
                Tables\Columns\TextColumn::make('apellido_director')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Generos.nombre_genero')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListDirectores::route('/'),
            'create' => Pages\CreateDirectores::route('/create'),
            'edit' => Pages\EditDirectores::route('/{record}/edit'),
        ];
    }
}
