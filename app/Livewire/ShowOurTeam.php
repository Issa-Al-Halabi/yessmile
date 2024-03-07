<?php

namespace App\Livewire;

use App\Models\AboutOurTeam;
use App\Models\Team;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowOurTeam extends Component
{
    #[Title('our-team')]

    public function render()
    {
        $AboutOurTeam = AboutOurTeam::first();

        $Teams = Team::all();

        return view('livewire.show-our-team', compact("Teams", "AboutOurTeam"));
    }
}
