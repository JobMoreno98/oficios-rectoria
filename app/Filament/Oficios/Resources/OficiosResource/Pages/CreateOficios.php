<?php

namespace App\Filament\Oficios\Resources\OficiosResource\Pages;

use App\Filament\Oficios\Resources\OficiosResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOficios extends CreateRecord
{
    protected static string $resource = OficiosResource::class;
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['solicitante_id'] = auth()->id();
        return $data;
    }
}
