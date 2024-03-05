<?php

namespace App\Filament\Resources\WhoWeAreResource\Pages;

use App\Filament\Resources\WhoWeAreResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListWhoWeAres extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = WhoWeAreResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }

}
