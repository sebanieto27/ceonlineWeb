<?php

namespace App\Filament\Resources\BioLinkResource\Pages;

use App\Filament\Resources\BioLinkResource;
use Filament\Resources\Pages\ListRecords;

class ListBioLinks extends ListRecords
{
    protected static string $resource = BioLinkResource::class;

    public function getSubheading(): ?string
    {
        return 'Links que aparecen en la página /links — ideal para poner en la bio de Instagram u otras redes sociales.';
    }

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
