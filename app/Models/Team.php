<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "teams";

    protected $translatable = [
        "name",
        "job_title",
        "work_history",
        "specialist",
    ];

    protected $fillable = [
        "name",
        "job_title",
        "image",
        "work_history",
        "specialist",
    ];
}
