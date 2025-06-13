<?php

namespace App\Filament\Oficios\Pages\Auth;

use Filament\Pages\Auth\Register as BaseRegister;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Filament\Facades\Filament;
use Filament\Http\Responses\Auth\Contracts\RegistrationResponse;
use Spatie\Permission\Models\Role;

class Register extends BaseRegister
{
    /**
     * @return ?RegistrationResponse
     */
    public function register(): ?RegistrationResponse
    {
        $data = $this->form->getState();

        // Encriptar contraseña antes de crear el usuario
        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        $user->assignRole('administrativo');

        event(new Registered($user));

        Filament::auth()->login($user);
        session()->regenerate();

        return app(RegistrationResponse::class);
    }
}
