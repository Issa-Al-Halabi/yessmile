<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = "footer";

    protected $fillable = [
        "phone",
        "email",
        "socials",
        "lat",
        "lang",
        "book_now",
    ];

    protected $casts = [
        "socials" => "json",
        "book_now" => "json",
    ];
}
