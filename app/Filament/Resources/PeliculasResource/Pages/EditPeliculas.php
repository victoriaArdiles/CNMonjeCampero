<?php

namespace App\Filament\Resources\PeliculasResource\Pages;

use App\Filament\Resources\PeliculasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeliculas extends EditRecord
{
    protected static string $resource = PeliculasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
