<?php

namespace App\Filament\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Resources\PrivacyPolicyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrivacyPolicy extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = PrivacyPolicyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
