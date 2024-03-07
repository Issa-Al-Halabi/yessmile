<?php

namespace App\Livewire;

use App\Models\AboutOurClinic;
use App\Models\Service;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowOurClinic extends Component
{

    #[Title('our-clinic')]

    public function render()
    {
        $data=[];
        $data["about_our_clinic"] = AboutOurClinic::first();
        $data["services"] = Service::all();
        return view('livewire.show-our-clinic',$data);
    }
}
