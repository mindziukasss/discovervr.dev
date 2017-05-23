<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrReservations extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_reservations';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'experience_id', 'order_id', 'time'];
}
