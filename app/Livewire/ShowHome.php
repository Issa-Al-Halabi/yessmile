<?php

namespace App\Livewire;

use App\Models\AboutUs;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $data=[];
        $data["about_us"] = AboutUs::all()->first();
        return view('livewire.show-home',$data);
    }
}
