<?php

namespace App\Models;



class VrPages extends CoreModel
{
    use UuidTrait;

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

    public function pagesTranslation()
    {
        return $this->belongsToMany(VrLanguageCodes::class, 'vr_pages_translations', 'page_id', 'language_code' )->withPivot('title', 'description_short', 'description_long', 'slug');
    }
}
