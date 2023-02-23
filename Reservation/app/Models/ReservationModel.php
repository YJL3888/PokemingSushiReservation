<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nb_guests',
        'date',
    ];

    protected $table = 'reservation';
    public $timestamps = false;
}
