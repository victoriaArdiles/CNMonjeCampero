<?php

namespace App\Filament\Resources\ProyeccionesSalasResource\Pages;

use App\Filament\Resources\ProyeccionesSalasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProyeccionesSalas extends ListRecords
{
    protected static string $resource = ProyeccionesSalasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
