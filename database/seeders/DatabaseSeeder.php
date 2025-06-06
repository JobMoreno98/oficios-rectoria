<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Recursos Filament (nombres de modelos en minúsculas/pluralizados)
        $resources = [
            'oficios',
            'user',
            'role',
        ];

        // Acciones que genera Shield
        $actions = [
            'view_any',
            'view',
            'create',
            'update',
            'delete',
        ];

        $permissions = [];

        // Crear permisos con el formato que usa Filament Shield
        foreach ($resources as $resource) {
            foreach ($actions as $action) {
                $permissions[] = "{$action}_{$resource}";
            }
        }

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }
        // Crear roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $editor = Role::firstOrCreate(['name' => 'administrativo']);

        // Asignar todos los permisos al admin
        $admin->syncPermissions($permissions);

        // Permisos básicos para el editor (crear, editar, ver)
        $editor->syncPermissions([
            'view_any_oficios',
            'view_oficios',
            'create_oficios',
            'update_oficios',
        ]);

        User::create([
            'name' => 'Test Admin',
            'email' => 'job@gmail.com',
            'password' => Hash::make('password'),
        ])->assignRole('admin')->update();

        User::create([
            'name' => 'Test administrativo',
            'email' => 'kevin@gmail.com',
            'password' => Hash::make('password'),
        ])->assignRole('administrativo')->update();
    }
}
