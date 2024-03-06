<?php

namespace App\Filament\Resources\AboutOurTeamResource\Pages;

use App\Filament\Resources\AboutOurTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAboutOurTeam extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = AboutOurTeamResource::class;

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
