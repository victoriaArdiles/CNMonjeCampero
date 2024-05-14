<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProyeccionesResource\Pages;
use App\Filament\Resources\ProyeccionesResource\RelationManagers;
use App\Models\Proyecciones;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProyeccionesResource extends Resource
{
    protected static ?string $model = Proyecciones::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\DatePicker::make('fecha_proyeccion')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dia_proyeccion')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fecha_proyeccion')
                    ->date()
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
            'index' => Pages\ListProyecciones::route('/'),
            'create' => Pages\CreateProyecciones::route('/create'),
            'edit' => Pages\EditProyecciones::route('/{record}/edit'),
        ];
    }
}
