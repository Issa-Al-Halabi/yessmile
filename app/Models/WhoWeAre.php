<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class WhoWeAre extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "who_we_are";

    protected $translatable = [
        "title",
        "body",
        "features",
        "banner_title",
        "banner_description",
        "why_choose_us",
    ];

    protected $fillable = [
        "title",
        "body",
        "image",
        "features",
        "banner_title",
        "banner_description",
        "why_choose_us",
    ];

    protected $cast = [
        "features" => 'json',
        "why_choose_us" => 'json',
    ];
}
