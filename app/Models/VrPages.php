<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrPages extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_pages';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'category_id', 'slug', 'cover_id'];
}
