<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flights extends Model
{
    protected $table = 'flights';
    protected $fillable = ['flight_name,flight_code,operator_id,
                             total_seats,status'];
    protected $primarykey = 'flight_id';
}
