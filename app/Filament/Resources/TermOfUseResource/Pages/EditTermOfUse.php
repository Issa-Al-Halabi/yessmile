<?php

namespace App\Filament\Resources\TermOfUseResource\Pages;

use App\Filament\Resources\TermOfUseResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTermOfUse extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = TermOfUseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
