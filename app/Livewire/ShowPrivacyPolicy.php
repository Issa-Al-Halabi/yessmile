<?php

namespace App\Livewire;

use App\Models\PrivacyPolicy;
use Livewire\Component;

class ShowPrivacyPolicy extends Component
{
    public function render()
    {
        $privacyPolicy = PrivacyPolicy::first();
        return view('livewire.show-privacy-policy', compact("privacyPolicy"));
    }
}
