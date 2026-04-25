<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-window';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 2;

    protected static ?string $modelLabel = 'Banner / Popup';

    protected static ?string $pluralModelLabel = 'Banners & Popups';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Contenido')
                    ->icon('heroicon-o-pencil')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        Forms\Components\Textarea::make('body')
                            ->label('Texto')
                            ->rows(2)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('cta_text')
                            ->label('Texto del botón')
                            ->placeholder('Ej: Probalo gratis'),
                        Forms\Components\TextInput::make('cta_url')
                            ->label('URL del botón')
                            ->url()
                            ->placeholder('https://ceonline.com.ar/prueba-gratis'),
                    ]),

                Forms\Components\Section::make('Configuración')
                    ->icon('heroicon-o-cog-6-tooth')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('type')
                            ->label('Tipo')
                            ->options([
                                'top_bar' => '📢 Barra superior',
                                'popup' => '💬 Popup central',
                                'bottom_bar' => '📌 Barra inferior',
                            ])
                            ->default('top_bar')
                            ->required(),
                        Forms\Components\CheckboxList::make('pages')
                            ->label('Mostrar en páginas')
                            ->options([
                                '*' => 'Todas las páginas',
                                'home' => 'Home',
                                'features' => 'Características',
                                'solutions' => 'Soluciones',
                                'pricing' => 'Precios',
                                'blog.index' => 'Blog',
                                'demo' => 'Demo',
                                'contact' => 'Contacto',
                                'trial' => 'Prueba gratis',
                            ])
                            ->columns(3),
                        Forms\Components\ColorPicker::make('bg_color')
                            ->label('Color de fondo')
                            ->default('#3b82f6'),
                        Forms\Components\ColorPicker::make('text_color')
                            ->label('Color de texto')
                            ->default('#ffffff'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true),
                        Forms\Components\Toggle::make('is_dismissible')
                            ->label('Se puede cerrar')
                            ->default(true),
                        Forms\Components\DateTimePicker::make('start_at')
                            ->label('Mostrar desde'),
                        Forms\Components\DateTimePicker::make('end_at')
                            ->label('Mostrar hasta'),
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Orden')
                            ->numeric()
                            ->default(0),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->searchable()
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('type')
                    ->label('Tipo')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'top_bar' => 'info',
                        'popup' => 'warning',
                        'bottom_bar' => 'success',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'top_bar' => 'Barra superior',
                        'popup' => 'Popup',
                        'bottom_bar' => 'Barra inferior',
                        default => $state,
                    }),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('start_at')
                    ->label('Desde')
                    ->dateTime('d/m/Y H:i')
                    ->placeholder('Siempre'),
                Tables\Columns\TextColumn::make('end_at')
                    ->label('Hasta')
                    ->dateTime('d/m/Y H:i')
                    ->placeholder('Sin fin'),
            ])
            ->defaultSort('sort_order')
            ->actions([
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
