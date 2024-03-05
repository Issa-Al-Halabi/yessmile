<?php

namespace App\Filament\Resources\WhoWeAreResource\Pages;

use App\Filament\Resources\WhoWeAreResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWhoWeAre extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = WhoWeAreResource::class;
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
