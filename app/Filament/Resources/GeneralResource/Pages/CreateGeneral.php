<?php

namespace App\Filament\Resources\GeneralResource\Pages;

use App\Filament\Resources\GeneralResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGeneral extends CreateRecord
{
    protected static string $resource = GeneralResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreatedNotificationTitle(): string
    {
        return 'Created';
    }
}
