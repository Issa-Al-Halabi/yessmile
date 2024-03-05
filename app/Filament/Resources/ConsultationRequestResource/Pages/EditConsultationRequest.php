<?php

namespace App\Filament\Resources\ConsultationRequestResource\Pages;

use App\Filament\Resources\ConsultationRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsultationRequest extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = ConsultationRequestResource::class;
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
