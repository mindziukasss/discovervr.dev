<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrRoles extends Model
{
    use CoreTrait;
    /**
     * $table name DataBases
     */
    protected $table = 'vr_roles';

    /**
     * $fillable is table 'vr_roles' fields
     */

    protected $fillable = ['id', 'name'];

}
