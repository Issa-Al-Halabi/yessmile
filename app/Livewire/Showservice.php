<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Title;
class Showservice extends Component
{
    public Service $service;

    public function mount($id)
    {
        $this->service = Service::findOrFail($id);
    }

    #[Title("Our Service")]
    public function render()
    {
        return view('livewire.showservice');
    }
}
