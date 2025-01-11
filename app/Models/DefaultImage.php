<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class DefaultImage extends Model
{
    use CrudTrait;
    protected $fillable = ['image_path'];
}
