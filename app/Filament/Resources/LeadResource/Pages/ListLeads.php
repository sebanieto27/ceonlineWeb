<?php

namespace App\Filament\Resources\LeadResource\Pages;

use App\Filament\Resources\LeadResource;
use App\Models\Lead;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLeads extends ListRecords
{
    protected static string $resource = LeadResource::class;

    public function getSubheading(): ?string
    {
        return 'Prospectos que completaron el formulario del sitio. Hacé clic en un lead para ver su historial de seguimientos y actividades.';
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('export_csv')
                ->label('Exportar CSV')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('gray')
                ->action(function () {
                    $leads = Lead::with('assignedUser')->orderByDesc('created_at')->get();

                    $headers = [
                        'Content-Type'        => 'text/csv; charset=UTF-8',
                        'Content-Disposition' => 'attachment; filename="leads-' . now()->format('Y-m-d') . '.csv"',
                    ];

                    $callback = function () use ($leads) {
                        $handle = fopen('php://output', 'w');
                        // BOM para Excel
                        fputs($handle, "\xEF\xBB\xBF");
                        fputcsv($handle, [
                            'ID', 'Nombre', 'Email', 'Teléfono', 'Empresa',
                            'Unidades', 'Propietarios', 'Estado', 'Origen',
                            'UTM Source', 'UTM Medium', 'UTM Campaign',
                            'Asignado a', 'Mensaje', 'Notas', 'Creado',
                        ]);
                        foreach ($leads as $lead) {
                            fputcsv($handle, [
                                $lead->id,
                                $lead->name,
                                $lead->email,
                                $lead->phone,
                                $lead->company,
                                $lead->units,
                                $lead->owners_count,
                                $lead->status,
                                $lead->source,
                                $lead->utm_source,
                                $lead->utm_medium,
                                $lead->utm_campaign,
                                $lead->assignedUser?->name,
                                $lead->message,
                                $lead->notes,
                                $lead->created_at?->format('d/m/Y H:i'),
                            ]);
                        }
                        fclose($handle);
                    };

                    return response()->streamDownload($callback, 'leads-' . now()->format('Y-m-d') . '.csv', $headers);
                }),
            Actions\CreateAction::make(),
        ];
    }
}

