<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class Showservice extends Component
{
    public Service $service;

    public function mount($id)
    {
        $this->service = Service::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.showservice');
    }
}
