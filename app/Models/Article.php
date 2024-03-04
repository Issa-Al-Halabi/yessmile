<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Article extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "articles";

    protected $translatable = [
        "title",
        "short_description",
        "long_description",
    ];


    protected $fillable = [
        "title",
        "category_id",
        "short_description",
        "long_description",
        "image",
        "date",
        "socials",
    ];

    protected $casts = [
        "socials" => "json",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
