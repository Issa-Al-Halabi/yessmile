<?php

namespace App\Livewire;

use App\Models\Branch;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowBranches extends Component
{
    #[Title('Branches')]
    public function render()
    {
        $branches = Branch::all();

        return view('livewire.show-branches', compact("branches"));
    }
}
