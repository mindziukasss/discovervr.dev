<?php

namespace App\Models;


class VrLanguageCodes extends CoreModel
{
    use UuidTrait;

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
