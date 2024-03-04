<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class PrivacyPolicy extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "privacy_policy";

    protected $translatable = [
        "body",
    ];

    protected $fillable = [
        "body",
    ];
}
