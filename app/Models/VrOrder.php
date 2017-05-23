<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrOrder extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_order';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'status'];
}
