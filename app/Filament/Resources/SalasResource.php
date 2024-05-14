<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalasResource\Pages;
use App\Filament\Resources\SalasResource\RelationManagers;
use App\Models\Salas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SalasResource extends Resource
{
    protected static ?string $model = Salas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nombre_sala')
                    ->required()
                    ->maxLength(15),
                Forms\Components\DatePicker::make('fecha_apertura'),
                Forms\Components\DatePicker::make('fecha_mantenimiento'),
                Forms\Components\Select::make('CT_FORMATOS_formato_id')
                ->relationship('Formatos','nombre_formato')
                ->required()
                ->searchable()
                ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre_sala_formato')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nombre_sala')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_apertura')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('fecha_mantenimiento')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Formatos.nombre_formato')
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
            'index' => Pages\ListSalas::route('/'),
            'create' => Pages\CreateSalas::route('/create'),
            'edit' => Pages\EditSalas::route('/{record}/edit'),
        ];
    }
}
