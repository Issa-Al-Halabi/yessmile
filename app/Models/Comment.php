<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Comment extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "comments";

    protected $translatable = [
        "name",
        "comment",
    ];

    protected $fillable = [
        "article_id",
        "name",
        "email",
        "comment",
        "date",
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
