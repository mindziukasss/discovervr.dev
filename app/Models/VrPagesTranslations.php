<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrPagesTranslations extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_pages_translations';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'page_id', 'language_code', 'title', 'description_short', 'description_long'];
}
