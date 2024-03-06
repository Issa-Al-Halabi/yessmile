<?php

namespace App\Livewire;

use App\Models\TermOfUse;
use Livewire\Component;

class ShowTermOfUse extends Component
{
    public function render()
    {
        $privacyPolicy = TermOfUse::first();
        return view('livewire.show-term-of-use', compact("privacyPolicy"));
    }
}
