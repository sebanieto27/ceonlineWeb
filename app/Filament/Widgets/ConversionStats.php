<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class ConversionStats extends BaseWidget
{
    protected static ?int $sort = 6;

    protected function getStats(): array
    {
        $total = Lead::count();
        $demos = Lead::whereIn('status', ['demo_scheduled', 'in_trial', 'negotiation', 'won'])->count();
        $won = Lead::where('status', 'won')->count();

        $leadToDemo = $total > 0 ? round(($demos / $total) * 100, 1) : 0;
        $demoToWon = $demos > 0 ? round(($won / $demos) * 100, 1) : 0;
        $leadToWon = $total > 0 ? round(($won / $total) * 100, 1) : 0;

        // Top sources
        $topSource = Lead::selectRaw('utm_source, COUNT(*) as cnt')
            ->whereNotNull('utm_source')
            ->groupBy('utm_source')
            ->orderByDesc('cnt')
            ->first();

        $topLanding = Lead::selectRaw('source, COUNT(*) as cnt')
            ->groupBy('source')
            ->orderByDesc('cnt')
            ->first();

        return [
            Stat::make('Lead → Demo', $leadToDemo . '%')
                ->description($demos . ' pasaron a demo')
                ->icon('heroicon-o-presentation-chart-line')
                ->color($leadToDemo >= 30 ? 'success' : 'warning'),

            Stat::make('Demo → Cliente', $demoToWon . '%')
                ->description($won . ' clientes cerrados')
                ->icon('heroicon-o-check-badge')
                ->color($demoToWon >= 20 ? 'success' : 'warning'),

            Stat::make('Conversión total', $leadToWon . '%')
                ->description('Lead → Cliente directo')
                ->icon('heroicon-o-arrow-trending-up')
                ->color($leadToWon >= 10 ? 'success' : 'info'),

            Stat::make('Top Source', $topSource?->utm_source ?? 'Sin datos')
                ->description(($topSource?->cnt ?? 0) . ' leads')
                ->icon('heroicon-o-globe-alt'),

            Stat::make('Top Canal', ucfirst(str_replace('_', ' ', $topLanding?->source ?? 'sin datos')))
                ->description(($topLanding?->cnt ?? 0) . ' leads')
                ->icon('heroicon-o-funnel'),
        ];
    }
}
