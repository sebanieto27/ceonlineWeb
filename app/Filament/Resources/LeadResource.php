<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeadResource\Pages;
use App\Models\Lead;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'CRM';

    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Lead';

    protected static ?string $pluralModelLabel = 'Leads';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::where('status', 'new')->count() ?: null;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Datos de contacto')
                    ->icon('heroicon-o-user')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Nombre')
                            ->required(),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->required(),
                        Forms\Components\TextInput::make('phone')
                            ->label('Teléfono')
                            ->tel(),
                        Forms\Components\TextInput::make('company')
                            ->label('Administración / Empresa'),
                        Forms\Components\Select::make('units')
                            ->label('Unidades funcionales')
                            ->options([
                                '1-50' => '1 a 50',
                                '51-100' => '51 a 100',
                                '101-500' => '101 a 500',
                                '500+' => 'Más de 500',
                            ]),
                        Forms\Components\Select::make('owners_count')
                            ->label('Propietarios que administra')
                            ->options([
                                '1-20' => '1 a 20',
                                '21-50' => '21 a 50',
                                '51-100' => '51 a 100',
                                '100+' => 'Más de 100',
                            ]),
                        Forms\Components\TextInput::make('subject')
                            ->label('Asunto'),
                    ]),

                Forms\Components\Section::make('Pipeline')
                    ->icon('heroicon-o-funnel')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Estado')
                            ->options([
                                'new' => '🔵 Nuevo',
                                'contacted' => '📞 Contactado',
                                'demo_scheduled' => '📅 Demo agendada',
                                'in_trial' => '🧪 En prueba',
                                'negotiation' => '💬 Negociación',
                                'won' => '✅ Ganado',
                                'lost' => '❌ Perdido',
                            ])
                            ->default('new')
                            ->required(),
                        Forms\Components\Select::make('source')
                            ->label('Origen')
                            ->options([
                                'demo_form' => 'Formulario de demo',
                                'contact_form' => 'Formulario de contacto',
                                'google_ads' => 'Google Ads',
                                'meta_ads' => 'Meta Ads',
                                'linkedin' => 'LinkedIn',
                                'organic' => 'Orgánico',
                                'referral' => 'Referido',
                                'other' => 'Otro',
                            ])
                            ->default('other'),
                        Forms\Components\Select::make('assigned_to')
                            ->label('Asignado a')
                            ->relationship('assignedUser', 'name')
                            ->searchable()
                            ->preload(),
                        Forms\Components\TextInput::make('loss_reason')
                            ->label('Motivo de pérdida')
                            ->visible(fn (Forms\Get $get) => $get('status') === 'lost'),
                    ]),

                Forms\Components\Section::make('Tracking (UTMs)')
                    ->icon('heroicon-o-signal')
                    ->columns(4)
                    ->collapsed()
                    ->schema([
                        Forms\Components\TextInput::make('utm_source')->label('Source'),
                        Forms\Components\TextInput::make('utm_medium')->label('Medium'),
                        Forms\Components\TextInput::make('utm_campaign')->label('Campaign'),
                        Forms\Components\TextInput::make('utm_content')->label('Content'),
                    ]),

                Forms\Components\Section::make('Notas')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->schema([
                        Forms\Components\Textarea::make('message')
                            ->label('Mensaje original')
                            ->rows(3)
                            ->disabled(),
                        Forms\Components\Textarea::make('notes')
                            ->label('Notas internas')
                            ->rows(4),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nombre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('company')
                    ->label('Empresa')
                    ->searchable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('owners_count')
                    ->label('Propietarios')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->copyable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('status')
                    ->label('Estado')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'new' => 'info',
                        'contacted' => 'warning',
                        'demo_scheduled' => 'primary',
                        'in_trial' => 'success',
                        'negotiation' => 'warning',
                        'won' => 'success',
                        'lost' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'new' => 'Nuevo',
                        'contacted' => 'Contactado',
                        'demo_scheduled' => 'Demo agendada',
                        'in_trial' => 'En prueba',
                        'negotiation' => 'Negociación',
                        'won' => 'Ganado',
                        'lost' => 'Perdido',
                        default => $state,
                    }),
                Tables\Columns\TextColumn::make('source')
                    ->label('Origen')
                    ->badge()
                    ->color('gray')
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'demo_form' => 'Demo',
                        'contact_form' => 'Contacto',
                        'google_ads' => 'Google',
                        'meta_ads' => 'Meta',
                        'linkedin' => 'LinkedIn',
                        'organic' => 'Orgánico',
                        'referral' => 'Referido',
                        default => 'Otro',
                    }),
                Tables\Columns\TextColumn::make('assignedUser.name')
                    ->label('Asignado')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')
                    ->label('Estado')
                    ->options([
                        'new' => 'Nuevo',
                        'contacted' => 'Contactado',
                        'demo_scheduled' => 'Demo agendada',
                        'in_trial' => 'En prueba',
                        'negotiation' => 'Negociación',
                        'won' => 'Ganado',
                        'lost' => 'Perdido',
                    ]),
                Tables\Filters\SelectFilter::make('source')
                    ->label('Origen')
                    ->options([
                        'demo_form' => 'Formulario de demo',
                        'contact_form' => 'Formulario de contacto',
                        'google_ads' => 'Google Ads',
                        'meta_ads' => 'Meta Ads',
                        'linkedin' => 'LinkedIn',
                        'organic' => 'Orgánico',
                        'referral' => 'Referido',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListLeads::route('/'),
            'create' => Pages\CreateLead::route('/create'),
            'edit' => Pages\EditLead::route('/{record}/edit'),
        ];
    }
}
