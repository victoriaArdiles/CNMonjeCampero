<?php

namespace App\Filament\Resources\DirectoresResource\Pages;

use App\Filament\Resources\DirectoresResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectores extends EditRecord
{
    protected static string $resource = DirectoresResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
