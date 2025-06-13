<?php

namespace App\Filament\Oficios\Resources\OficiosResource\Pages;

use App\Filament\Oficios\Resources\OficiosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOficios extends ListRecords
{
    protected static string $resource = OficiosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Agregar'),
        ];
    }
}
