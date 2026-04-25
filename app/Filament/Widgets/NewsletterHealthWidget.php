<?php

namespace App\Filament\Widgets;

use App\Models\NewsletterSubscriber;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class NewsletterHealthWidget extends BaseWidget
{
    protected static ?int $sort = 8;

    protected function getHeading(): string
    {
        return 'Newsletter — Salud de la lista';
    }

    protected function getStats(): array
    {
        $active = NewsletterSubscriber::where('status', 'active')->count();
        $unsub  = NewsletterSubscriber::where('status', 'unsubscribed')->count();
        $total  = $active + $unsub;

        $retentionRate = $total > 0 ? round(($active / $total) * 100, 1) : 0;

        // Nuevos esta semana
        $newThisWeek = NewsletterSubscriber::where('status', 'active')
            ->where('created_at', '>=', now()->startOfWeek())
            ->count();

        // Nuevos la semana pasada
        $newLastWeek = NewsletterSubscriber::where('status', 'active')
            ->whereBetween('created_at', [now()->subWeek()->startOfWeek(), now()->subWeek()->endOfWeek()])
            ->count();

        $weekTrend = $newThisWeek >= $newLastWeek ? 'up' : 'down';

        // Bajas esta semana
        $unsubThisWeek = NewsletterSubscriber::where('status', 'unsubscribed')
            ->where('updated_at', '>=', now()->startOfWeek())
            ->count();

        // Top source
        $topSource = NewsletterSubscriber::where('status', 'active')
            ->selectRaw('source, count(*) as total')
            ->groupBy('source')
            ->orderByDesc('total')
            ->value('source') ?? '—';

        return [
            Stat::make('Suscriptores activos', $active)
                ->description($newThisWeek . ' nuevos esta semana' . ($newLastWeek > 0 ? ' (sem. ant: ' . $newLastWeek . ')' : ''))
                ->descriptionIcon($weekTrend === 'up' ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($weekTrend === 'up' ? 'success' : 'warning')
                ->icon('heroicon-o-envelope'),

            Stat::make('Tasa de retención', $retentionRate . '%')
                ->description($unsub . ' bajas totales')
                ->color($retentionRate >= 90 ? 'success' : ($retentionRate >= 75 ? 'warning' : 'danger'))
                ->icon('heroicon-o-heart'),

            Stat::make('Bajas esta semana', $unsubThisWeek)
                ->description('Desuscriptos en los últimos 7 días')
                ->color($unsubThisWeek === 0 ? 'success' : ($unsubThisWeek <= 3 ? 'warning' : 'danger'))
                ->icon('heroicon-o-user-minus'),

            Stat::make('Fuente principal', ucfirst($topSource))
                ->description('Canal con más suscriptores activos')
                ->icon('heroicon-o-funnel'),
        ];
    }
}
