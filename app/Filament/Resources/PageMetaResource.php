<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageMetaResource\Pages;
use App\Models\PageMeta;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageMetaResource extends Resource
{
    protected static ?string $model = PageMeta::class;

    protected static ?string $navigationIcon = 'heroicon-o-magnifying-glass';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'SEO de Página';

    protected static ?string $pluralModelLabel = 'SEO Manager';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Página')
                    ->icon('heroicon-o-document')
                    ->columns(2)
                    ->schema([
                        Forms\Components\Select::make('route_name')
                            ->label('Página')
                            ->options([
                                'home' => 'Home (/)',
                                'features' => 'Características (/caracteristicas)',
                                'solutions' => 'Soluciones (/soluciones)',
                                'pricing' => 'Precios (/precios)',
                                'blog.index' => 'Blog (/blog)',
                                'demo' => 'Demo (/demo)',
                                'contact' => 'Contacto (/contacto)',
                                'trial' => 'Prueba Gratis (/prueba-gratis)',
                                'privacy' => 'Privacidad (/privacidad)',
                                'terms' => 'Términos (/terminos)',
                            ])
                            ->required()
                            ->unique(ignoreRecord: true),
                        Forms\Components\TextInput::make('page_label')
                            ->label('Etiqueta interna')
                            ->required()
                            ->maxLength(100),
                    ]),

                Forms\Components\Section::make('Meta Tags')
                    ->description('Estos valores reemplazan los meta tags por defecto de cada página.')
                    ->icon('heroicon-o-magnifying-glass')
                    ->schema([
                        Forms\Components\TextInput::make('meta_title')
                            ->label('Meta Title')
                            ->placeholder('Ej: CEO Online - Gestión Integral de Consorcios')
                            ->maxLength(70)
                            ->helperText('Máx. 70 caracteres. Se muestra en la pestaña del navegador y en Google.')
                            ->reactive()
                            ->afterStateUpdated(fn ($state, callable $set) => null),
                        Forms\Components\Textarea::make('meta_description')
                            ->label('Meta Description')
                            ->placeholder('Ej: La plataforma más completa para gestionar consorcios...')
                            ->rows(3)
                            ->maxLength(160)
                            ->helperText('Máx. 160 caracteres. Se muestra debajo del título en Google.'),
                        Forms\Components\TextInput::make('og_image')
                            ->label('OG Image URL')
                            ->placeholder('https://ceonline.com.ar/images/og-home.jpg')
                            ->url()
                            ->helperText('Imagen que aparece al compartir en redes sociales. Recomendado: 1200x630px.'),
                    ]),

                Forms\Components\Section::make('HTML personalizado')
                    ->schema([
                        Forms\Components\Textarea::make('custom_head')
                            ->label('HTML extra en <head>')
                            ->helperText('Se inyecta en el head de esta página específica. Ej: canonical alternativo, hreflang, etc.')
                            ->rows(3),
                    ])
                    ->collapsible()
                    ->collapsed(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('page_label')
                    ->label('Página')
                    ->weight('bold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('route_name')
                    ->label('Ruta')
                    ->badge()
                    ->color('gray'),
                Tables\Columns\TextColumn::make('meta_title')
                    ->label('Title')
                    ->limit(40)
                    ->placeholder('Usando default'),
                Tables\Columns\TextColumn::make('meta_description')
                    ->label('Description')
                    ->limit(50)
                    ->placeholder('Usando default'),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Actualizado')
                    ->since()
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPageMetas::route('/'),
            'create' => Pages\CreatePageMeta::route('/create'),
            'edit' => Pages\EditPageMeta::route('/{record}/edit'),
        ];
    }
}
