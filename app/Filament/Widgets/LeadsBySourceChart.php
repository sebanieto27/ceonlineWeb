<?php

namespace App\Filament\Widgets;

use App\Models\Lead;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Carbon;

class LeadsBySourceChart extends ChartWidget
{
    protected static ?string $heading = 'Leads por origen';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $sources = [
            'demo_form' => 'Demo',
            'contact_form' => 'Contacto',
            'google_ads' => 'Google',
            'meta_ads' => 'Meta',
            'linkedin' => 'LinkedIn',
            'organic' => 'Orgánico',
            'referral' => 'Referido',
            'other' => 'Otro',
        ];

        $data = [];
        $labels = [];

        foreach ($sources as $key => $label) {
            $count = Lead::where('source', $key)->count();
            if ($count > 0) {
                $data[] = $count;
                $labels[] = $label;
            }
        }

        if (empty($data)) {
            $data = [0];
            $labels = ['Sin datos'];
        }

        return [
            'datasets' => [
                [
                    'label' => 'Leads',
                    'data' => $data,
                    'backgroundColor' => [
                        '#3b82f6', '#ef4444', '#0ea5e9', '#8b5cf6',
                        '#10b981', '#f59e0b', '#6366f1', '#94a3b8',
                    ],
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
