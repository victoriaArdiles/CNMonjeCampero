<?php

namespace App\Filament\Resources\PeliculasFormatosResource\Pages;

use App\Filament\Resources\PeliculasFormatosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeliculasFormatos extends ListRecords
{
    protected static string $resource = PeliculasFormatosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
