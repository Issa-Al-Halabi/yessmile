<?php

namespace App\Filament\Resources\AboutOurClinicResource\Pages;

use App\Filament\Resources\AboutOurClinicResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutOurClinics extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = AboutOurClinicResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
