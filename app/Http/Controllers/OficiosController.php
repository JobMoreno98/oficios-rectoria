<?php

namespace App\Http\Controllers;

use App\Models\Oficios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class OficiosController extends Controller
{
    public function descargar(Oficios $oficio): StreamedResponse
    {
        $ruta = $oficio->archivo;

        if (!Storage::disk('sftp_files')->exists($ruta)) {
            abort(404, 'Archivo no encontrado en el servidor remoto.');
        }

        $stream = Storage::disk('sftp_files')->readStream($ruta);

        if (!$stream) {
            abort(500, 'No se pudo abrir el archivo.');
        }

        // Forzar MIME type PDF para asegurarnos
        $mimeType = 'application/pdf';

        return response()->stream(function () use ($stream) {
            fpassthru($stream);
        }, 200, [
            "Content-Type" => $mimeType,
            "Content-Disposition" => "inline; filename=\"" . basename($ruta) . "\"",
        ]);
    }
}
