<?php

namespace App\Filament\Resources\AboutOurClinicResource\Pages;

use App\Filament\Resources\AboutOurClinicResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutOurClinic extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = AboutOurClinicResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
