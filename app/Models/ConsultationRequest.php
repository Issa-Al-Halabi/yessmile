<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ConsultationRequest extends Model
{
    use HasFactory, HasTranslations;


    protected $table = "consultation_requests";

    protected $translatable = [
        'patient_name',
        'country',
        'diagnose_description',
    ];

    protected $fillable = [
        'patient_name',
        'age',
        'country',
        'diagnose_description',
        'images',
    ];

    protected $casts = [
        'images' => 'array',
    ];
}
