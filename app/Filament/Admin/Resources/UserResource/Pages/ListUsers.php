<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\Support\Htmlable;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Agregar'),
        ];
    }
    public function getTitle(): string|Htmlable
    {
        return 'Usuarios';
    }
    protected function getTableWrapperHtmlAttributes(): array
    {
        return [
            'class' => 'w-full',
        ];
    }
}
