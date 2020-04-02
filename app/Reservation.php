<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'email',
        'district',
        'phone',
        'time_reservation',
        'numOfPeople',
        'combo',
        'comments'
    ];
}
