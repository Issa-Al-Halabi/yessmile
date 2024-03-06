<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class AboutOurTeam extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "about_our_team";

    protected $translatable = [
        "title",
        "description",
    ];

    protected $fillable = [
        "title",
        "description",
        "image",
    ];
}
