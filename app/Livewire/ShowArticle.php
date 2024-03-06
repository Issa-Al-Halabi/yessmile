<?php

namespace App\Livewire;

use App\Filament\Resources\CommentResource;
use App\Models\Appointment;
use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use Carbon\Carbon;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;
use Livewire\Component;

class ShowArticle extends Component
{
    public Article $article;
    public $name;
    public $email;
    public $comment;

    public function save()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'comment' => 'required',
        ]);

        $comment = Comment::create([
            'name' => $this->name,
            'email' => $this->email,
            'comment' =>$this->comment,
            'article_id' =>$this->article->id,
            'date' =>Carbon::now()
        ]);

        Notification::make()
            ->title('New Comment')
            ->success()
            ->body($this->name .' Commented on article ' .  $this->article->title."\n". "\"".$this->comment."\"")
            ->actions([
                Action::make('View')
                    ->url(CommentResource::getUrl('index', ['record' => $comment])),
            ])
            ->sendToDatabase(User::all());
        session()->flash('message', 'تم الارسال');

            return  redirect()->to('article/'.$this->article->id);
    }
    public function mount($id)
    {
        $this->article = Article::findOrFail($id);
    }
    public function render()
    {
        $data=[];
        $data["more_articles"] = Article::where("id","!=",$this->article->id)->take(3)->get();
        return view('livewire.show-article',$data);
    }
}
