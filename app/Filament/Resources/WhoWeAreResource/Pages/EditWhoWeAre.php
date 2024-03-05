<?php

namespace App\Filament\Resources\WhoWeAreResource\Pages;

use App\Filament\Resources\WhoWeAreResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWhoWeAre extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = WhoWeAreResource::class;

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
