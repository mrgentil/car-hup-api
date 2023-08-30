<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year_of_manufacture',
        'color',
        'type_of_fuel',
        'price_by_day',
        'is_available',
        'user_id',
        'transmission',
        'mileage',
        'door',
        'brake',
        'engine',
        'passengers',
        'baggage',

    ];

    public function images()
    {
        return $this->hasMany(CarImage::class);
    }

}
