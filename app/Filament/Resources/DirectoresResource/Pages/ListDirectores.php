<?php

namespace App\Filament\Resources\DirectoresResource\Pages;

use App\Filament\Resources\DirectoresResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDirectores extends ListRecords
{
    protected static string $resource = DirectoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
