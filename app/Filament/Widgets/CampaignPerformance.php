<?php

namespace App\Filament\Widgets;

use App\Models\Campaign;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class CampaignPerformance extends BaseWidget
{
    protected static ?int $sort = 4;

    protected int|string|array $columnSpan = 'full';

    protected static ?string $heading = 'Rendimiento de Campañas Activas';

    public function table(Table $table): Table
    {
        return $table
            ->query(Campaign::query()->where('status', 'active'))
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Campaña')
                    ->weight('bold'),
                Tables\Columns\BadgeColumn::make('utm_source')
                    ->label('Source'),
                Tables\Columns\TextColumn::make('utm_medium')
                    ->label('Medium'),
                Tables\Columns\TextColumn::make('leads_count')
                    ->label('Leads')
                    ->getStateUsing(fn (Campaign $record) => $record->leads_count)
                    ->badge()
                    ->color(fn ($state) => $state > 0 ? 'success' : 'gray'),
                Tables\Columns\TextColumn::make('budget')
                    ->label('Presupuesto')
                    ->money('ARS'),
                Tables\Columns\TextColumn::make('tracking_url')
                    ->label('URL')
                    ->limit(50)
                    ->copyable()
                    ->copyMessage('Copiado'),
            ])
            ->defaultSort('created_at', 'desc')
            ->paginated(false);
    }
}
