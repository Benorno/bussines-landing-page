<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'car_brand',
        'car_model',
        'licence',
        'appointment_date',
        'service',
        'status',
    ];

    public static function create(array $array)
    {
    }

}
