<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BioLinkResource\Pages;
use App\Models\BioLink;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BioLinkResource extends Resource
{
    protected static ?string $model = BioLink::class;

    protected static ?string $navigationIcon = 'heroicon-o-link';

    protected static ?string $navigationGroup = 'Marketing';

    protected static ?int $navigationSort = 4;

    protected static ?string $modelLabel = 'Link en Bio';

    protected static ?string $pluralModelLabel = 'Link en Bio';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Link')
                    ->columns(2)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Título')
                            ->placeholder('Ej: Pedí tu demo gratis')
                            ->required()
                            ->maxLength(100),
                        Forms\Components\TextInput::make('url')
                            ->label('URL')
                            ->url()
                            ->required()
                            ->placeholder('https://ceonline.com.ar/demo'),
                        Forms\Components\Select::make('icon')
                            ->label('Ícono')
                            ->options([
                                '🚀' => '🚀 Demo',
                                '📱' => '📱 App',
                                '📧' => '📧 Email',
                                '📞' => '📞 Teléfono',
                                '💬' => '💬 WhatsApp',
                                '📝' => '📝 Blog',
                                '🎥' => '🎥 Video',
                                '📊' => '📊 Precios',
                                '🌐' => '🌐 Web',
                                '📌' => '📌 Instagram',
                                '💼' => '💼 LinkedIn',
                            ])
                            ->searchable(),
                        Forms\Components\TextInput::make('sort_order')
                            ->label('Orden')
                            ->numeric()
                            ->default(0),
                        Forms\Components\ColorPicker::make('bg_color')
                            ->label('Color de fondo')
                            ->default('#3b82f6'),
                        Forms\Components\ColorPicker::make('text_color')
                            ->label('Color de texto')
                            ->default('#ffffff'),
                        Forms\Components\Toggle::make('is_active')
                            ->label('Activo')
                            ->default(true),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('icon')
                    ->label('')
                    ->width('40px'),
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
                    ->weight('bold')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->label('URL')
                    ->limit(40)
                    ->copyable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->label('Activo')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sort_order')
                    ->label('Orden')
                    ->sortable(),
            ])
            ->defaultSort('sort_order')
            ->reorderable('sort_order')
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
            'index' => Pages\ListBioLinks::route('/'),
            'create' => Pages\CreateBioLink::route('/create'),
            'edit' => Pages\EditBioLink::route('/{record}/edit'),
        ];
    }
}
