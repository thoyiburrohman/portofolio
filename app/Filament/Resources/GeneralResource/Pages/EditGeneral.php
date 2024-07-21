<?php

namespace App\Filament\Resources\GeneralResource\Pages;

use App\Filament\Resources\GeneralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGeneral extends EditRecord
{
    protected static string $resource = GeneralResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotificationTitle(): string
    {
        return 'Updated';
    }
}
