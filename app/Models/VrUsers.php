<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrUsers extends Model
{
    /**
     * $table name DataBases
     */
    protected $table = 'vr_users';

    /**
     * $fillable is table 'vr_users' fields
     */

    protected $fillable = ['id', 'name', 'email', 'password', 'phone'];

    /**
     * $hidden is table 'vr_users' fields is hidden
     */

    protected $hidden = [
        'password', 'remember_token',
    ];
}
