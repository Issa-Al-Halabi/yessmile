<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "services";

    protected $translatable = [
        "name",
        "title",
        "image",
        "description",
    ];

    protected $fillable = [
        "name",
        "title",
        "description",
        "images",
    ];

    protected $casts = [
        'images' => 'json',
    ];
}
