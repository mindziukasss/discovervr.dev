<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrCategories extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_categories';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'comment', 'language_id'];
}
