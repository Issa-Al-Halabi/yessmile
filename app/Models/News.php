<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory,HasTranslations;

    protected $table = "news";

    protected $translatable = [
        "title",
        "short_description",
        "long_description",
    ];


    protected $fillable = [
        "title",
        "short_description",
        "long_description",
        "image",
        "date",
        "socials",
    ];

    protected $casts = [
        "socials" => "json",
    ];

}
