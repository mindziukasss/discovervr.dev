<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrLanguageCodes extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_language_codes';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['page_id', 'language_code'];
}
