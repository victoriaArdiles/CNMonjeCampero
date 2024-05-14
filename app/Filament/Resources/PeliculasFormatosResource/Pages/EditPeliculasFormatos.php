<?php

namespace App\Filament\Resources\PeliculasFormatosResource\Pages;

use App\Filament\Resources\PeliculasFormatosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPeliculasFormatos extends EditRecord
{
    protected static string $resource = PeliculasFormatosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
