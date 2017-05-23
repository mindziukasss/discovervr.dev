<?php
/**
 * Created by PhpStorm.
 * User: CodeAcademy
 * Date: 5/23/2017
 * Time: 11:14 AM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

trait CoreTrait
{
    use SoftDeletes;

    /**
     * Disables auto-increment
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * Generates UUID if doesn't exist in entry
     *
     * returns @string
     */
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model)
        {
            if (!isset($model->attributes['id'])) {
                $model->attributes['id'] = Uuid::uuid4();
            } else {
                $model->{$model->getKeyName()} = $model->attributes['id'];
            }
        });
    }
}