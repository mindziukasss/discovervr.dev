<?php

namespace App\Models;



class VrMenu extends CoreModel
{

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
