<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use Filament\Widgets\ChartWidget;

class PipelineChart extends ChartWidget
{
    protected static ?string $heading = 'Pipeline de leads';

    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $statuses = [
            'new' => 'Nuevo',
            'contacted' => 'Contactado',
            'demo_scheduled' => 'Demo',
            'in_trial' => 'En prueba',
            'negotiation' => 'Negociación',
            'won' => 'Ganado',
            'lost' => 'Perdido',
        ];

        $data = [];
        $labels = [];

        foreach ($statuses as $key => $label) {
            $data[] = Lead::where('status', $key)->count();
            $labels[] = $label;
        }

        return [
            'datasets' => [
                [
                    'label' => 'Leads',
                    'data' => $data,
                    'backgroundColor' => [
                        '#3b82f6', '#f59e0b', '#6366f1', '#10b981',
                        '#f97316', '#22c55e', '#ef4444',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
