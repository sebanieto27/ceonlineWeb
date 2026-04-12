<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class TrackingSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-signal';

    protected static ?string $navigationGroup = 'Configuración';

    protected static ?string $navigationLabel = 'Tracking & Analytics';

    protected static ?string $title = 'Tracking & Analytics';

    protected static ?int $navigationSort = 100;

    protected static string $view = 'filament.pages.tracking-settings';

    public ?array $data = [];

    private array $trackingKeys = [
        'ga4_measurement_id',
        'gtm_container_id',
        'meta_pixel_id',
        'linkedin_partner_id',
        'google_ads_id',
        'custom_head_scripts',
        'custom_body_scripts',
    ];

    public function mount(): void
    {
        $settings = [];
        foreach ($this->trackingKeys as $key) {
            $settings[$key] = SiteSetting::get($key, '');
        }

        $this->form->fill($settings);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Google')
                    ->description('Conectá Google Analytics, Tag Manager y Ads para medir el tráfico y las conversiones.')
                    ->icon('heroicon-o-chart-bar')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('ga4_measurement_id')
                            ->label('Google Analytics 4 — Measurement ID')
                            ->placeholder('G-XXXXXXXXXX')
                            ->helperText('Lo encontrás en GA4 → Admin → Data Streams → Measurement ID')
                            ->maxLength(20),
                        Forms\Components\TextInput::make('gtm_container_id')
                            ->label('Google Tag Manager — Container ID')
                            ->placeholder('GTM-XXXXXXX')
                            ->helperText('Lo encontrás en GTM → Workspace → Container ID arriba a la derecha')
                            ->maxLength(20),
                        Forms\Components\TextInput::make('google_ads_id')
                            ->label('Google Ads — Conversion ID')
                            ->placeholder('AW-XXXXXXXXX')
                            ->helperText('Para tracking de conversiones de Google Ads')
                            ->maxLength(20),
                    ]),

                Forms\Components\Section::make('Meta & LinkedIn')
                    ->description('Pixels para remarketing y seguimiento de campañas en redes sociales.')
                    ->icon('heroicon-o-share')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('meta_pixel_id')
                            ->label('Meta Pixel ID')
                            ->placeholder('123456789012345')
                            ->helperText('Facebook/Instagram Pixel → Events Manager → Data Sources')
                            ->maxLength(20),
                        Forms\Components\TextInput::make('linkedin_partner_id')
                            ->label('LinkedIn Insight Tag — Partner ID')
                            ->placeholder('123456')
                            ->helperText('LinkedIn Campaign Manager → Account Assets → Insight Tag')
                            ->maxLength(20),
                    ]),

                Forms\Components\Section::make('Scripts personalizados')
                    ->description('Pegá cualquier script adicional (ej: Hotjar, Clarity, chat widgets).')
                    ->icon('heroicon-o-code-bracket')
                    ->schema([
                        Forms\Components\Textarea::make('custom_head_scripts')
                            ->label('Scripts en <head>')
                            ->helperText('Se inyectan antes de cerrar </head>. Incluí las etiquetas <script> completas.')
                            ->rows(4),
                        Forms\Components\Textarea::make('custom_body_scripts')
                            ->label('Scripts antes de </body>')
                            ->helperText('Se inyectan antes de cerrar </body>. Ideal para chat widgets o herramientas de heatmap.')
                            ->rows(4),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($this->trackingKeys as $key) {
            SiteSetting::set($key, $data[$key] ?? null, 'tracking');
        }

        SiteSetting::bustGroupCache('tracking');

        Notification::make()
            ->title('Configuración guardada')
            ->body('Los scripts de tracking se actualizaron correctamente.')
            ->success()
            ->send();
    }
}
