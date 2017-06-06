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
    protected $fillable = ['id', 'new_window', 'sequence', 'vr_parent_id'];



    public function translation()
    {
        return $this->hasOne(VrMenuTranslations::class, 'menu_id', 'id')->where('language_code', '=', app()->getLocale());
    }


    public function subCategory()
    {
        return $this->hasMany(VrMenu::class, 'vr_parent_id')->with('translation');
    }
}
