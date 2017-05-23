<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrCategoriesTranslations extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_categories_translations';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'name', 'language_code', 'category_id'];
}
