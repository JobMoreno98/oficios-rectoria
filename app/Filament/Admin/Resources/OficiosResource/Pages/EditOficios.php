<?php

namespace App\Filament\Admin\Resources\OficiosResource\Pages;

use App\Filament\Admin\Resources\OficiosResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditOficios extends EditRecord
{
    protected static string $resource = OficiosResource::class;
    protected function mutateFormDataBeforeSave(array $data): array
    {
        $data['elaboro_id'] = auth()->id();
        if (isset($data['archivo'])) {

            $archivo = $data['archivo']; // ruta relativa en disco local

            $contenido = Storage::disk('local')->get($archivo);

            $rutaRemota = basename($archivo);

            Storage::disk('sftp_files')->put($rutaRemota, $contenido);

            // Guardamos la ruta remota en el campo log_path
            $data['archivo'] = $rutaRemota;

            // (Opcional) Borramos el archivo local
            Storage::disk('local')->delete($archivo);
        }
        return $data;
    }
    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
