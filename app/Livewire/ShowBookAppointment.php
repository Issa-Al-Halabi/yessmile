<?php

namespace App\Livewire;

use App\Filament\Resources\AppointmentResource;
use App\Models\Appointment;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowBookAppointment extends Component
{
    public $patient_name;
    public $age;
    public $country;
    public $date;
    public $privacyPolicy;

    #[Title('book-appointment')]

    public function render()
    {
        return view('livewire.show-book-appointment');
    }

    public function save()
    {
        $validated = $this->validate([
            'patient_name' => 'required|min:3',
            'age' => 'required|numeric',
            'country' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'privacyPolicy' => 'required',
        ]);

        $appointment = Appointment::create($validated);

        Notification::make()
            ->title('New Appointment')
            ->success()
            ->body('New Appointment By ' . $this->patient_name)
            ->actions([
                Action::make('View')
                    ->url(AppointmentResource::getUrl('index', ['record' => $appointment])),
            ])
            ->sendToDatabase(User::all());
        $this->reset();
        session()->flash('message', 'Successfully Created');

        return;
    }
}
