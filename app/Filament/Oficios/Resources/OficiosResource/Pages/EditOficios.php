<?php

namespace App\Filament\Oficios\Resources\OficiosResource\Pages;

use App\Filament\Oficios\Resources\OficiosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOficios extends EditRecord
{
    protected static string $resource = OficiosResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
