<?php

namespace App\Livewire;

use App\Models\WhoWeAre;
use Livewire\Component;

class ShowWhoWeAre extends Component
{
    public function render()
    {
        $whoWeAre = WhoWeAre::first();
        return view('livewire.show-who-we-are', compact("whoWeAre"));
    }
}
