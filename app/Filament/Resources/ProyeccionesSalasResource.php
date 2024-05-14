<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProyeccionesSalasResource\Pages;
use App\Filament\Resources\ProyeccionesSalasResource\RelationManagers;
use App\Models\ProyeccionesSalas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProyeccionesSalasResource extends Resource
{
    protected static ?string $model = ProyeccionesSalas::class;

    protected static ?string $navigationIcon = 'heroicon-o-paper-clip';
    protected static ?string $navigationLabel = 'Sala, Fecha y Horario de Proyeccion';
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('CT_HORARIOS_horario_id')
                ->relationship('Horarios','nombre_horario')
                ->required()
                ->searchable()
                ->preload(),
                Forms\Components\Select::make('CT_PROYECCIONES_proyeccion_id')
                ->relationship('Proyecciones','dia_proyeccion')
                ->required()
                ->searchable()
                ->preload(),
                Forms\Components\Select::make('CT_SALAS_sala_id')
                ->relationship('Salas','nombre_sala_formato')
                ->required()
                ->searchable()
                ->preload(),
                Forms\Components\Select::make('CT_PELICULAS_FORMATOS_ct_pelicula_formato')
                ->relationship('peliculas_formatos','pelicula_titulo_completo')
                ->required()
                ->searchable()
                ->preload(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('informacion_general')
                ->numeric()
                ->sortable(),
                Tables\Columns\TextColumn::make('precio_funcion')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Horarios.nombre_horario')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Proyecciones.dia_proyeccion')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('duracion_funcion'),
                Tables\Columns\TextColumn::make('Salas.nombre_sala')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('peliculas_formatos.pelicula_titulo_completo')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\Action::make('customAction')
                ->label('Vender Boletos')
                ->icon('heroicon-o-star')
                ->link('ruta/a/la/pagina/especifica/{record}')
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
            'index' => Pages\ListProyeccionesSalas::route('/'),
            'create' => Pages\CreateProyeccionesSalas::route('/create'),
            'edit' => Pages\EditProyeccionesSalas::route('/{record}/edit'),
        ];
    }
}
