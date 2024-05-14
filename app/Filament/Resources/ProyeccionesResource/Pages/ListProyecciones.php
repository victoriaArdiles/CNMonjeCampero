<?php

namespace App\Filament\Resources\ProyeccionesResource\Pages;

use App\Filament\Resources\ProyeccionesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProyecciones extends ListRecords
{
    protected static string $resource = ProyeccionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
