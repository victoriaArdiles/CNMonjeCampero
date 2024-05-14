<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PeliculasFormatosResource\Pages;
use App\Filament\Resources\PeliculasFormatosResource\RelationManagers;
use App\Models\PeliculasFormatos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PeliculasFormatosResource extends Resource
{
    protected static ?string $model = PeliculasFormatos::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';
    protected static ?string $navigationLabel = 'Formato e Idioma de Pelicula';
    protected static ?string $modelLabel = 'Formato e Idioma de Pelicula';
    protected static ?string $navigationGroup = 'Administracion y Gestion de Peliculas';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
             
                Forms\Components\Select::make('CT_PELICULAS_pelicula_id')
                ->relationship('Peliculas','titulo_pelicula')
                ->required()
                ->searchable()
                ->preload(),
                Forms\Components\Select::make('CT_FORMATOS_formato_id')
                ->relationship('Formatos','nombre_formato')
                ->required()
                ->searchable()
                ->preload(),
                Forms\Components\Select::make('CT_IDIOMAS_idioma_id')
                ->relationship('Idiomas','nombre_idioma')
                ->required()
                ->searchable()
                ->preload(),
                Forms\Components\Select::make('CT_SUBTITULOS_subtitulo_id')
                ->relationship('Subtitulos','nombre_subtitulo')
                ->required()
                ->searchable()
                ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pelicula_titulo_completo')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Peliculas.titulo_pelicula')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Formatos.nombre_formato')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Idiomas.nombre_idioma')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Subtitulos.nombre_subtitulo')
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
            'index' => Pages\ListPeliculasFormatos::route('/'),
            'create' => Pages\CreatePeliculasFormatos::route('/create'),
            'edit' => Pages\EditPeliculasFormatos::route('/{record}/edit'),
        ];
    }
}
