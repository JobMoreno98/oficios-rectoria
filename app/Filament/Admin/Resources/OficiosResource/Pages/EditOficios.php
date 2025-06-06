<?php

namespace App\Filament\Admin\Resources\OficiosResource\Pages;

use App\Filament\Admin\Resources\OficiosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOficios extends EditRecord
{
    protected static string $resource = OficiosResource::class;
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['elaboro_id'] = auth()->id();
        return $data;
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
