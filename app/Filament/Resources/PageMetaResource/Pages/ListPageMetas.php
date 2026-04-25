<?php

namespace App\Filament\Resources\PageMetaResource\Pages;

use App\Filament\Resources\PageMetaResource;
use Filament\Resources\Pages\ListRecords;

class ListPageMetas extends ListRecords
{
    protected static string $resource = PageMetaResource::class;

    public function getSubheading(): ?string
    {
        return 'SEO de cada página del sitio: título, descripción y Open Graph para redes sociales. Completar esto mejora el posicionamiento en Google.';
    }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
