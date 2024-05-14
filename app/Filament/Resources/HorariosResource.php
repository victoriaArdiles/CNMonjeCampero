<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HorariosResource\Pages;
use App\Filament\Resources\HorariosResource\RelationManagers;
use App\Models\Horarios;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HorariosResource extends Resource
{
    protected static ?string $model = Horarios::class;

    protected static ?string $navigationIcon = 'heroicon-o-clock';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('horario')
                    ->required(),
                Forms\Components\Select::make('CT_TIPO_HORARIOS_tipo_horario_id')
                ->relationship('tipo_horarios','nombre_tipo_horario')
                ->required()
                ->searchable()
                ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nombre_horario')
                    ->searchable(),
                Tables\Columns\TextColumn::make('horario'),
                Tables\Columns\TextColumn::make('tipo_horarios.nombre_tipo_horario')
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
            'index' => Pages\ListHorarios::route('/'),
            'create' => Pages\CreateHorarios::route('/create'),
            'edit' => Pages\EditHorarios::route('/{record}/edit'),
        ];
    }
}
