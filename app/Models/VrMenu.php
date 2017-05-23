<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrMenu extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_menu';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'url', 'new_window', 'name', 'sequence', 'vr_parent_id'];
}
