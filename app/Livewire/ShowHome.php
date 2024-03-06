<?php

namespace App\Livewire;

use App\Models\AboutUs;
use App\Models\Article;
use App\Models\Faq;
use App\Models\Service;
use Livewire\Component;
use Livewire\Attributes\Title;
class ShowHome extends Component
{
    #[Title('Home')]
    public function render()
    {
        $data=[];
        $data["about_us"] = AboutUs::all()->first();
        $data["services"] = Service::all();
        $data["articles"] = Article::all()->take(4);
        $data["faqs"] = Faq::all();

        return view('livewire.show-home',$data);

    }
}
