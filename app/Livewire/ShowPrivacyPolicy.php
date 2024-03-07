<?php

namespace App\Livewire;

use App\Models\PrivacyPolicy;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowPrivacyPolicy extends Component
{
    #[Title('privacy-policy')]

    public function render()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('livewire.show-privacy-policy', compact("privacyPolicy"));
    }
}
