<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeliculasResource\Pages;
use App\Filament\Resources\PeliculasResource\RelationManagers;
use App\Models\Peliculas;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeliculasResource extends Resource
{
    protected static ?string $model = Peliculas::class;

    protected static ?string $navigationIcon = 'heroicon-o-film';
    protected static ?string $navigationGroup = 'Administracion y Gestion de Peliculas';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('titulo_pelicula')
                    ->required()
                    ->maxLength(60),
                Forms\Components\Textarea::make('sinopsis')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('duracion_pelicula')
                    ->required(),
                    FileUpload::make('imagen_pelicula')
                    ->image(),
                Forms\Components\DatePicker::make('fecha_estreno_pelicula')
                    ->required(),
                Forms\Components\Select::make('CT_CLASIFICACION_clasificacion_id')
                    ->relationship('Clasificaciones','nombre_clasificacion')
                    ->required()
                    ->searchable()
                    ->preload(),
                Forms\Components\Select::make('CT_DIRECTORES_director_id')
                    ->relationship('Directores','nombre_completo_director')
                    ->required()
                    ->searchable()
                    ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('titulo_pelicula')
                    ->searchable(),
                Tables\Columns\TextColumn::make('duracion_pelicula'),
                ImageColumn::make('imagen_pelicula'),
                Tables\Columns\TextColumn::make('fecha_estreno_pelicula')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Clasificaciones.nombre_clasificacion')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Directores.nombre_completo_director')
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
            'index' => Pages\ListPeliculas::route('/'),
            'create' => Pages\CreatePeliculas::route('/create'),
            'edit' => Pages\EditPeliculas::route('/{record}/edit'),
        ];
    }
}
