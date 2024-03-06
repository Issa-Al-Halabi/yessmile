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
        "brief",
        "work_history",
        "specialist",
    ];

    protected $fillable = [
        "name",
        "job_title",
        "brief",
        "image",
        "work_history",
        "specialist",
    ];


    protected $casts = [
        "work_history" => "json",
        "specialist" => "json",
    ];
}
