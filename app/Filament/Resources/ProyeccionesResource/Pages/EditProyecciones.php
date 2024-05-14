<?php

namespace App\Filament\Resources\ProyeccionesResource\Pages;

use App\Filament\Resources\ProyeccionesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProyecciones extends EditRecord
{
    protected static string $resource = ProyeccionesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
