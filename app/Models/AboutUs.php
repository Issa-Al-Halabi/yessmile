<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutUs extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "about_us";

    protected $translatable = [
        "title",
        "body",
        'banner_title',
        'banner_button',
        'banner_body',
    ];

    protected $fillable = [
        "title",
        "body",
        "image",
        'banner_title',
        'banner_button',
        'banner_body',
    ];
}
