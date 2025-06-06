<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\OficiosResource\Pages;
use App\Filament\Admin\Resources\OficiosResource\RelationManagers;
use App\Models\Oficios;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Html;
use Filament\Forms\Components\ViewField;

class OficiosResource extends Resource
{
    protected static ?string $model = Oficios::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return $this->hasRole('admin');
    }
    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('elabora.name')->numeric()->hidden(),

            Textarea::make('asunto')->required()->autosize(),
            Forms\Components\TextInput::make('receptora')->required(),
            Forms\Components\DatePicker::make('fecha_elaboracion')->required(),
            FileUpload::make('archivo')
                ->label('Archivo')
                ->disk('local') // se sube temporalmente al disco local
                ->directory('temp-uploads')
                ->preserveFilenames()
                ->acceptedFileTypes(['application/pdf']),
            ViewField::make('archivo')
                ->label('Archivo Actual')
                ->view('filament.components.link-descarga', function ($record) {
                    return ['record' => $record];
                })
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([TextColumn::make('id')->numeric()->searchable()->label('Folio'), Tables\Columns\TextColumn::make('solicito.name')->label('Solicitó')->sortable(), Tables\Columns\TextColumn::make('asunto')->searchable(), Tables\Columns\TextColumn::make('receptora')->searchable(), Tables\Columns\TextColumn::make('fecha_elaboracion')->date()->sortable(), TextColumn::make('log_path')->label('Log')->formatStateUsing(fn($state) => $state ? 'Descargar log' : 'Sin archivo')->url(fn($record) => $record->log_path ? route('descargar.log.sftp', ['proceso' => $record->id]) : null, shouldOpenInNewTab: true)->color('primary'), Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true), Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true)])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\BulkActionGroup::make([Tables\Actions\DeleteBulkAction::make()])]);
    }

    public static function getRelations(): array
    {
        return [
                //
            ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOficios::route('/'),
            'create' => Pages\CreateOficios::route('/create'),
            'edit' => Pages\EditOficios::route('/{record}/edit'),
        ];
    }
}
