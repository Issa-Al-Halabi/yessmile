<?php

namespace App\Filament\Resources\ConsultationRequestResource\Pages;

use App\Filament\Resources\ConsultationRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConsultationRequests extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = ConsultationRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }

}
