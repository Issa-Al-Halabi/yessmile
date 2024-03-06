<?php

namespace App\Filament\Resources\AboutOurTeamResource\Pages;

use App\Filament\Resources\AboutOurTeamResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutOurTeams extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = AboutOurTeamResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
