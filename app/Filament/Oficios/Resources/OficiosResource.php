<?php

namespace App\Filament\Oficios\Resources;

use App\Filament\Oficios\Resources\OficiosResource\Pages;
use App\Filament\Oficios\Resources\OficiosResource\RelationManagers;
use App\Models\Oficios;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class OficiosResource extends Resource
{
    protected static ?string $model = Oficios::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('elaboro_id')
                    ->numeric()->hidden(),

                Textarea::make('asunto')->required()->autosize(),
                Forms\Components\TextInput::make('receptora')
                    ->required(),
                Forms\Components\DatePicker::make('fecha_elaboracion')->hidden()
                    ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->numeric()->searchable()->label('Folio'),
                TextColumn::make('elabora.name')
                    ->sortable(),
                TextColumn::make('asunto')
                    ->searchable(),
                TextColumn::make('receptora')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()->label('Fecha de Solicitud'),
                TextColumn::make('fecha_elaboracion')
                    ->date()
                    ->sortable(),
                TextColumn::make('log_path')
                    ->label('Log')
                    ->formatStateUsing(fn($state) => $state ? 'Descargar log' : 'Sin archivo')
                    ->url(
                        fn($record) => $record->log_path
                            ? route('descargar.log.sftp', ['proceso' => $record->id])
                            : null,
                        shouldOpenInNewTab: true
                    )
                    ->color('primary')

            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
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

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ])->where('solicitante_id', Auth::id());;
    }
}
