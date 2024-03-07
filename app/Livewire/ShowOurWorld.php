<?php

namespace App\Livewire;

use App\Models\Article;
use App\Models\Category;
use App\Models\News;
use Livewire\Attributes\Title;
use Livewire\Component;

class ShowOurWorld extends Component
{
    #[Title('our-world')]

    public function render()
    {
        $data=[];
        $data["articles"] = Article::all();
        $data["news"] = News::all();
        $data["categories"] = Category::all();
        return view('livewire.show-our-world',$data);
    }
}
