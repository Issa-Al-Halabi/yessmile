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
        "location"
    ];

    protected $casts = [
        "socials" => "json",
        "book_now" => "json",
    ];

    public function getLocationAttribute(): array
    {
        return [
            "lat" => (float)$this->lat,
            "lng" => (float)$this->lang,
        ];
    }

    /**
     * Takes a Google style Point array of 'lat' and 'lng' values and assigns them to the
     * 'lat' and 'lang' attributes on this model.
     *
     * Used by the Filament Google Maps package.
     *
     * Requires the 'location' attribute be included in this model's $fillable array.
     *
     * @param ?array $location
     * @return void
     */
    public function setLocationAttribute(?array $location): void
    {
        if (is_array($location)) {
            $this->attributes['lat'] = $location['lat'];
            $this->attributes['lang'] = $location['lng'];
            unset($this->attributes['location']);
        }
    }

    /**
     * Get the lat and lng attribute/field names used on this table
     *
     * Used by the Filament Google Maps package.
     *
     * @return string[]
     */
    public static function getLatLngAttributes(): array
    {
        return [
            'lat' => 'lat',
            'lng' => 'lang',
        ];
    }

    /**
     * Get the name of the computed location attribute
     *
     * Used by the Filament Google Maps package.
     *
     * @return string
     */
    public static function getComputedLocation(): string
    {
        return 'location';
    }
}
