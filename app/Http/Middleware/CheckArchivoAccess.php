<?php

namespace App\Http\Middleware;

use App\Models\Oficios;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckArchivoAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
        if (!auth()->check()) {
            return redirect()->route('filament.oficios.auth.login');
            abort(403, 'No tienes permiso para acceder a este archivo.');
        }
        $user = $request->user();
        $registroId = $request->route('registro');

        $registro = Oficios::find($registroId);

        if (!$registro) {
            abort(404, 'Registro no encontrado');
        }

        if (!$user->hasRole('admin') && $user->id !== $registro->elaboro_id) {
            abort(403, 'No tienes permiso para acceder a este archivo.');
        }

        return $next($request);
    }
}
