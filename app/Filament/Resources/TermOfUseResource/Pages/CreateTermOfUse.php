<?php

namespace App\Filament\Resources\TermOfUseResource\Pages;

use App\Filament\Resources\TermOfUseResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTermOfUse extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = TermOfUseResource::class;

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
