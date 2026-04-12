<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use App\Models\NewsletterSubscriber;
use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $totalLeads = Lead::count();
        $newLeads = Lead::where('status', 'new')->count();
        $wonLeads = Lead::where('status', 'won')->count();
        $thisMonthLeads = Lead::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();

        $winRate = $totalLeads > 0
            ? round(($wonLeads / $totalLeads) * 100, 1)
            : 0;

        return [
            Stat::make('Leads este mes', $thisMonthLeads)
                ->description($newLeads . ' sin contactar')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('info')
                ->icon('heroicon-o-user-plus'),

            Stat::make('Total Leads', $totalLeads)
                ->description('En el pipeline')
                ->icon('heroicon-o-user-group'),

            Stat::make('Win Rate', $winRate . '%')
                ->description($wonLeads . ' clientes ganados')
                ->descriptionIcon('heroicon-m-check-badge')
                ->color($winRate >= 20 ? 'success' : 'warning')
                ->icon('heroicon-o-trophy'),

            Stat::make('Newsletter', NewsletterSubscriber::where('status', 'active')->count())
                ->description('Suscriptores activos')
                ->icon('heroicon-o-envelope')
                ->color('success'),

            Stat::make('Blog', Post::where('is_published', true)->count())
                ->description('Artículos publicados')
                ->icon('heroicon-o-document-text'),
        ];
    }
}
