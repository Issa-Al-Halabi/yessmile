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
    ];

    protected $fillable = [
        "title",
        "body",
        "image",
    ];
}
