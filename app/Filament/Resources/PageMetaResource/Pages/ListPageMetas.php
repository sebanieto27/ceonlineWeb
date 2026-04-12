<?php

namespace App\Filament\Resources\PageMetaResource\Pages;

use App\Filament\Resources\PageMetaResource;
use Filament\Resources\Pages\ListRecords;

class ListPageMetas extends ListRecords
{
    protected static string $resource = PageMetaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
