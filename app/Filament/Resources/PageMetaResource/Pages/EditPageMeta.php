<?php

namespace App\Filament\Resources\PageMetaResource\Pages;

use App\Filament\Resources\PageMetaResource;
use App\Models\PageMeta;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPageMeta extends EditRecord
{
    protected static string $resource = PageMetaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function afterSave(): void
    {
        PageMeta::bustCache($this->record->route_name);
    }
}
