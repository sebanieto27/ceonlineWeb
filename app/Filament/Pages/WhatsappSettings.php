<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use Filament\Forms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class WhatsappSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-left-ellipsis';

    protected static ?string $navigationGroup = 'Configuración';

    protected static ?string $navigationLabel = 'WhatsApp';

    protected static ?string $title = 'WhatsApp — Botón flotante';

    protected static ?int $navigationSort = 101;

    public function getSubheading(): ?string
    {
        return 'Activá y configurá el botón flotante verde que aparece en todas las páginas del sitio para que los visitantes te escriban por WhatsApp.';
    }

    protected static string $view = 'filament.pages.whatsapp-settings';

    public ?array $data = [];

    private array $settingKeys = [
        'whatsapp_number',
        'whatsapp_message',
        'whatsapp_enabled',
    ];

    public function mount(): void
    {
        $this->form->fill([
            'whatsapp_number'  => SiteSetting::get('whatsapp_number', ''),
            'whatsapp_message' => SiteSetting::get('whatsapp_message', '¡Hola! Quiero más información sobre CEO Online.'),
            'whatsapp_enabled' => SiteSetting::get('whatsapp_enabled', '1') === '1',
        ]);
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Botón de WhatsApp')
                    ->description('Configurá el número y el mensaje pre-cargado del botón flotante que aparece en todas las páginas del sitio.')
                    ->icon('heroicon-o-chat-bubble-left-ellipsis')
                    ->schema([
                        Forms\Components\Toggle::make('whatsapp_enabled')
                            ->label('Mostrar botón en el sitio')
                            ->helperText('Activá o desactivá el botón flotante sin necesidad de cambiar el número.')
                            ->onColor('success')
                            ->columnSpanFull(),

                        Forms\Components\TextInput::make('whatsapp_number')
                            ->label('Número de WhatsApp')
                            ->placeholder('5491112345678')
                            ->helperText('Código de país + código de área + número, sin espacios ni guiones. Ejemplo: 5491112345678 (Argentina, Buenos Aires).')
                            ->required()
                            ->maxLength(20),

                        Forms\Components\TextInput::make('whatsapp_message')
                            ->label('Mensaje pre-cargado')
                            ->placeholder('¡Hola! Quiero más información sobre CEO Online.')
                            ->helperText('Este texto aparece ya escrito cuando el usuario abre WhatsApp desde el botón.')
                            ->maxLength(255),
                    ]),
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        SiteSetting::set('whatsapp_number',  $data['whatsapp_number'] ?? '',  'general');
        SiteSetting::set('whatsapp_message', $data['whatsapp_message'] ?? '', 'general');
        SiteSetting::set('whatsapp_enabled', ($data['whatsapp_enabled'] ?? false) ? '1' : '0', 'general');

        // Limpiar cache de cada clave
        foreach ($this->settingKeys as $key) {
            \Illuminate\Support\Facades\Cache::forget("site_setting.{$key}");
        }

        Notification::make()
            ->title('Configuración guardada')
            ->body('El botón de WhatsApp se actualizó correctamente.')
            ->success()
            ->send();
    }
}
