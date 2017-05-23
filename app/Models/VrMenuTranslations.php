<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrMenuTranslations extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_menu_translations';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'menu_id', 'language_code'];
}
