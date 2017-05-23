<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VrResources extends Model
{
    use CoreTrait;

    /**
     * Database table name
     * @var string
     */
    protected $table = 'vr_resources';
    /**
     * Fillable column names
     * @var array
     */
    protected $fillable = ['id', 'mime_type', 'path', 'width', 'size', 'height'];
}
