<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrConnUserRoles extends Model
{
    /**
     * $table name DataBases
     */
    protected $table = 'vr_connections_users_roles';

    /**
     * $fillable is table 'vr_connections_users_roles' fields
     */

    protected $fillable = ['user_id', 'role_id'];
}
