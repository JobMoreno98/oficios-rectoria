@if ($record && $record->archivo)
    <a href="{{ route('descargar.sftp', ['oficio' => $record->id]) }}" target="_blank" class="bg-primary-600 hover:bg-primary-700 text-white font-semibold py-2 px-4 rounded shadow">
        Ver archivo
    </a>
@else
    <span>No hay archivo subido.</span>
@endif
