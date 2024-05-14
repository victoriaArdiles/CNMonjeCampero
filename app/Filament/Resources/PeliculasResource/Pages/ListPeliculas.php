<?php

namespace App\Filament\Resources\PeliculasResource\Pages;

use App\Filament\Resources\PeliculasResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPeliculas extends ListRecords
{
    protected static string $resource = PeliculasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
