<?php

namespace App\Filament\Admin\Resources\OficiosResource\Pages;

use App\Filament\Admin\Resources\OficiosResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOficios extends ListRecords
{
    protected static string $resource = OficiosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
