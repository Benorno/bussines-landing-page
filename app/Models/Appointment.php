<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'car_brand',
        'car_model',
        'licence',
        'appointment_date',
        'service',
        'status',
    ];

}
