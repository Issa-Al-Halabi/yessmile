<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Branch extends Model
{
    use HasFactory, HasTranslations;

    protected $table = "branches";

    protected $translatable = ["branch_name"];

    protected $fillable = ["branch_name", "lat", "lang"];
}
