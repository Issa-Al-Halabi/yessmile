<?php

namespace App\Livewire;

use App\Models\News;
use Livewire\Component;

class ShowNews extends Component
{
    public News $news;

    public function mount($id)
    {
        $this->news = News::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-news');
    }
}
