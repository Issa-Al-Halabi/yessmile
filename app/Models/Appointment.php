<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Appointment extends Model
{
    use HasFactory, HasTranslations;
    public $timestamps = false;

    protected $table = "appointments";

    protected $translatable = [
        "patient_name",
        "country",
    ];

    protected $fillable = [
        "patient_name",
        "age",
        "country",
        "date",
    ];
}
