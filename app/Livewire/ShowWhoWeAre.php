<?php

namespace App\Livewire;

use App\Models\WhoWeAre;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowWhoWeAre extends Component
{
    #[Title('who-we-are')]

    public function render()
    {
        $whoWeAre = WhoWeAre::first();
        return view('livewire.show-who-we-are', compact("whoWeAre"));
    }
}
