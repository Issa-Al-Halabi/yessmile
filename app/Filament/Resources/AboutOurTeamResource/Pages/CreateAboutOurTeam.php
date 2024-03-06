<?php

namespace App\Filament\Resources\AboutOurTeamResource\Pages;

use App\Filament\Resources\AboutOurTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAboutOurTeam extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = AboutOurTeamResource::class;

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
