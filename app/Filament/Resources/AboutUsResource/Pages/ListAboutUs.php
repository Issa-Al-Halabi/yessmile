<?php

namespace App\Filament\Resources\AboutUsResource\Pages;

use App\Filament\Resources\AboutUsResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament;
use Filament\Notifications\Notification;

class ListAboutUs extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = AboutUsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),

            Filament\Actions\Action::make("d")->action(function () {
                Notification::make()
                    ->title('Saved successfully')
                    ->success()
                    ->body('Changes to the post have been saved.')
                    ->actions([
                        Filament\Notifications\Actions\Action::make('markAsRead')
                            ->button()
                            ->markAsRead(),
                    ])
                    ->sendToDatabase(User::all());
            }),
        ];
    }
}
