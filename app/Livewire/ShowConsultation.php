<?php

namespace App\Livewire;

use App\Filament\Resources\ConsultationRequestResource;
use App\Models\ConsultationRequest;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class ShowConsultation extends Component
{
    use WithFileUploads;

    public function render()
    {
        return view('livewire.show-consultation');
    }

    public $patient_name;
    public $age;
    public $country;
    public $diagnose_description;
    public $images;
    public $privacyPolicy;

    public function save()
    {
        $validated = $this->validate([
            'patient_name' => 'required|min:3',
            'age' => 'required|numeric',
            'country' => 'required',
            'diagnose_description' => 'required',
            'images.*' => 'image',
            'privacyPolicy' => 'required',
        ]);

        $imagesNames = [];

        if (is_array($this->images)) {
            foreach ($this->images as $image) {
                $imagesNames[] =  $image->store("conultation", "public");
            }
        }

        $consultationRequest = ConsultationRequest::create([
            'patient_name' => $this->patient_name,
            'age' => $this->age,
            'country' => $this->country,
            'diagnose_description' => $this->diagnose_description,
            'images' => $imagesNames,
        ]);

        Notification::make()
            ->title('New Conultation')
            ->success()
            ->body('New Consultation Request By ' . $this->patient_name)
            ->actions([
                Action::make('View')
                    ->url(ConsultationRequestResource::getUrl('index', ['record' => $consultationRequest])),
            ])
            ->sendToDatabase(User::all());

        $this->reset();

        session()->flash('message', 'Successfully Created');

        return;
    }
}
