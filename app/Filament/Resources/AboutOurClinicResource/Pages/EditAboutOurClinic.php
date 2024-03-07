<?php

namespace App\Filament\Resources\AboutOurClinicResource\Pages;

use App\Filament\Resources\AboutOurClinicResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutOurClinic extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = AboutOurClinicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
