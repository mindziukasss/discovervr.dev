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

trait CoreModel
{
    use SoftDeletes;
    public $incrementing = false;

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