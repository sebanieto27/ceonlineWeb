<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CampaignResource\Pages;
use App\Models\Campaign;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CampaignResource extends Resource
{
    protected static ?string $model = Campaign::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Campaña';

    protected static ?string $pluralModelLabel = 'Campañas';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'active')->count() ?: null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Campaña')
                    ->icon('heroicon-o-megaphone')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre de la campaña')
                            ->placeholder('Ej: Instagram Mayo 2026')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('status')
                            ->label('Estado')
                            ->options([
                                'active' => '🟢 Activa',
                                'paused' => '🟡 Pausada',
                                'ended' => '🔴 Finalizada',
                            ])
                            ->default('active')
                            ->required(),
                        Forms\Components\TextInput::make('destination_url')
                            ->label('URL de destino')
                            ->placeholder('https://ceonline.com.ar/prueba-gratis')
                            ->url()
                            ->required(),
                        Forms\Components\TextInput::make('budget')
                            ->label('Presupuesto')
                            ->numeric()
                            ->prefix('$')
                            ->placeholder('0.00'),
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Fecha inicio'),
                        Forms\Components\DatePicker::make('end_date')
                            ->label('Fecha fin'),
                    ]),

                Forms\Components\Section::make('Parámetros UTM')
                    ->description('Estos campos se combinan automáticamente para generar la URL de tracking.')
                    ->icon('heroicon-o-link')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('utm_source')
                            ->label('Source (fuente)')
                            ->options([
                                'google' => 'Google',
                                'meta' => 'Meta (Facebook/Instagram)',
                                'linkedin' => 'LinkedIn',
                                'instagram' => 'Instagram',
                                'facebook' => 'Facebook',
                                'twitter' => 'Twitter/X',
                                'email' => 'Email',
                                'whatsapp' => 'WhatsApp',
                                'referral' => 'Referido',
                            ])
                            ->searchable()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('value')
                                    ->label('Nuevo source')
                                    ->required(),
                            ])
                            ->createOptionUsing(fn (array $data) => $data['value']),
                        Forms\Components\Select::make('utm_medium')
                            ->label('Medium (medio)')
                            ->options([
                                'cpc' => 'CPC (pago por clic)',
                                'social' => 'Social (orgánico)',
                                'email' => 'Email',
                                'banner' => 'Banner',
                                'display' => 'Display',
                                'video' => 'Video',
                                'affiliate' => 'Afiliado',
                            ])
                            ->searchable()
                            ->required()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('value')
                                    ->label('Nuevo medium')
                                    ->required(),
                            ])
                            ->createOptionUsing(fn (array $data) => $data['value']),
                        Forms\Components\TextInput::make('utm_campaign')
                            ->label('Campaign (campaña)')
                            ->placeholder('mayo-2026-trial')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('utm_term')
                            ->label('Term (término) — opcional')
                            ->placeholder('gestion consorcios')
                            ->maxLength(255),
                        Forms\Components\TextInput::make('utm_content')
                            ->label('Content (contenido) — opcional')
                            ->placeholder('cta-header')
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ]),

                Forms\Components\Section::make('Notas')
                    ->schema([
                        Forms\Components\Textarea::make('notes')
                            ->label('Notas internas')
                            ->rows(3)
                            ->columnSpanFull(),
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Campaña')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Estado')
                    ->colors([
                        'success' => 'active',
                        'warning' => 'paused',
                        'danger' => 'ended',
                    ])
                    ->formatStateUsing(fn (string $state) => match ($state) {
                        'active' => 'Activa',
                        'paused' => 'Pausada',
                        'ended' => 'Finalizada',
                        default => $state,
                    }),
                Tables\Columns\TextColumn::make('utm_source')
                    ->label('Source')
                    ->badge(),
                Tables\Columns\TextColumn::make('utm_medium')
                    ->label('Medium')
                    ->badge()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('utm_campaign')
                    ->label('Campaign')
                    ->limit(25),
                Tables\Columns\TextColumn::make('leads_count')
                    ->label('Leads')
                    ->getStateUsing(fn (Campaign $record) => $record->leads_count)
                    ->badge()
                    ->color(fn ($state) => $state > 0 ? 'success' : 'gray'),
                Tables\Columns\TextColumn::make('budget')
                    ->label('Presupuesto')
                    ->money('ARS')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('tracking_url')
                    ->label('URL de Tracking')
                    ->limit(40)
                    ->copyable()
                    ->copyMessage('URL copiada al portapapeles')
                    ->tooltip(fn (Campaign $record) => $record->tracking_url),
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Inicio')
                    ->date('d/m/Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creada')
                    ->since()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Estado')
                    ->options([
                        'active' => 'Activa',
                        'paused' => 'Pausada',
                        'ended' => 'Finalizada',
                    ]),
                Tables\Filters\SelectFilter::make('utm_source')
                    ->label('Source')
                    ->options(fn () => Campaign::distinct()->pluck('utm_source', 'utm_source')->toArray()),
            ])
            ->actions([
                Tables\Actions\Action::make('copyUrl')
                    ->label('Copiar URL')
                    ->icon('heroicon-o-clipboard')
                    ->action(fn () => null)
                    ->extraAttributes(fn (Campaign $record) => [
                        'x-data' => '{}',
                        'x-on:click' => "navigator.clipboard.writeText('{$record->tracking_url}'); \$tooltip('URL copiada!')",
                    ]),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCampaigns::route('/'),
            'create' => Pages\CreateCampaign::route('/create'),
            'edit' => Pages\EditCampaign::route('/{record}/edit'),
        ];
    }
}
