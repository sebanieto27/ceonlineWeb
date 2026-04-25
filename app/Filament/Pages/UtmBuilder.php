<?php

namespace App\Filament\Pages;

use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;

class UtmBuilder extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?string $navigationLabel = 'UTM Builder';

    protected static ?string $title = 'UTM Builder — Generador de URLs';

    protected static ?int $navigationSort = 10;

    public function getSubheading(): ?string
    {
        return 'Generá URLs con parámetros UTM para rastrear de dónde vienen tus visitas. Usalas en anuncios, emails o redes sociales.';
    }

    protected static string $view = 'filament.pages.utm-builder';

    public ?array $data = [];

    public string $generatedUrl = '';

    public function mount(): void
    {
        $this->form->fill([
            'base_url'     => 'https://ceonline.com.ar/prueba-gratis',
            'utm_source'   => '',
            'utm_medium'   => '',
            'utm_campaign' => '',
            'utm_term'     => '',
            'utm_content'  => '',
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('URL base')
                    ->icon('heroicon-o-globe-alt')
                    ->schema([
                        Forms\Components\Select::make('base_url')
                            ->label('Página de destino')
                            ->options([
                                'https://ceonline.com.ar/'                   => 'Home (/)',
                                'https://ceonline.com.ar/prueba-gratis'      => 'Prueba Gratis',
                                'https://ceonline.com.ar/demo'               => 'Demo',
                                'https://ceonline.com.ar/caracteristicas'    => 'Características',
                                'https://ceonline.com.ar/soluciones'         => 'Soluciones',
                                'https://ceonline.com.ar/contacto'           => 'Contacto',
                                'https://ceonline.com.ar/precios'            => 'Precios',
                            ])
                            ->searchable()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('value')
                                    ->label('URL personalizada')
                                    ->url()
                                    ->required(),
                            ])
                            ->createOptionUsing(fn (array $data) => $data['value'])
                            ->live()
                            ->afterStateUpdated(fn () => $this->generate())
                            ->required(),
                    ]),

                Forms\Components\Section::make('Parámetros UTM')
                    ->description('Completá los campos y la URL se genera automáticamente.')
                    ->icon('heroicon-o-tag')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('utm_source')
                            ->label('Source *')
                            ->helperText('Dónde viene el tráfico. Ej: google, meta, instagram')
                            ->options([
                                'google'    => 'Google',
                                'meta'      => 'Meta (Facebook/Instagram)',
                                'instagram' => 'Instagram',
                                'facebook'  => 'Facebook',
                                'linkedin'  => 'LinkedIn',
                                'twitter'   => 'Twitter/X',
                                'whatsapp'  => 'WhatsApp',
                                'email'     => 'Email',
                                'referral'  => 'Referido',
                            ])
                            ->searchable()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('value')->label('Source personalizado')->required(),
                            ])
                            ->createOptionUsing(fn (array $data) => $data['value'])
                            ->live()
                            ->afterStateUpdated(fn () => $this->generate())
                            ->required(),

                        Forms\Components\Select::make('utm_medium')
                            ->label('Medium *')
                            ->helperText('Tipo de tráfico. Ej: cpc, social, email')
                            ->options([
                                'cpc'       => 'CPC (pago por clic)',
                                'social'    => 'Social (orgánico)',
                                'email'     => 'Email',
                                'banner'    => 'Banner',
                                'display'   => 'Display',
                                'video'     => 'Video',
                            ])
                            ->searchable()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('value')->label('Medium personalizado')->required(),
                            ])
                            ->createOptionUsing(fn (array $data) => $data['value'])
                            ->live()
                            ->afterStateUpdated(fn () => $this->generate())
                            ->required(),

                        Forms\Components\TextInput::make('utm_campaign')
                            ->label('Campaign *')
                            ->placeholder('mayo-2026-trial')
                            ->helperText('Nombre de la campaña. Usá guiones, sin espacios.')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn () => $this->generate())
                            ->required(),

                        Forms\Components\TextInput::make('utm_term')
                            ->label('Term (opcional)')
                            ->placeholder('gestion consorcios')
                            ->helperText('Palabra clave (para Google Ads).')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn () => $this->generate()),

                        Forms\Components\TextInput::make('utm_content')
                            ->label('Content (opcional)')
                            ->placeholder('cta-hero-azul')
                            ->helperText('Distinguir variantes del mismo anuncio.')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn () => $this->generate())
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    public function generate(): void
    {
        $data = $this->form->getState();

        $base = $data['base_url'] ?? '';
        if (! $base) {
            $this->generatedUrl = '';
            return;
        }

        $params = array_filter([
            'utm_source'   => $data['utm_source'] ?? '',
            'utm_medium'   => $data['utm_medium'] ?? '',
            'utm_campaign' => $data['utm_campaign'] ?? '',
            'utm_term'     => $data['utm_term'] ?? '',
            'utm_content'  => $data['utm_content'] ?? '',
        ]);

        $this->generatedUrl = $params ? $base . '?' . http_build_query($params) : $base;
    }
}
