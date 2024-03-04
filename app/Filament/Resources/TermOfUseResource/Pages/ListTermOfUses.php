<?php

namespace App\Filament\Resources\TermOfUseResource\Pages;

use App\Filament\Resources\TermOfUseResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTermOfUses extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = TermOfUseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
