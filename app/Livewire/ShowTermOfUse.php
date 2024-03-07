<?php

namespace App\Livewire;

use App\Models\TermOfUse;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowTermOfUse extends Component
{
    #[Title('term-of-use')]

    public function render()
    {
        $privacyPolicy = TermOfUse::first();
        return view('livewire.show-term-of-use', compact("privacyPolicy"));
    }
}
