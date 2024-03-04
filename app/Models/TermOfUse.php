<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class TermOfUse extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "terms_of_use";

    protected $translatable = [
        "body",
    ];

    protected $fillable = [
        "body",
    ];
}
