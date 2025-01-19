<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class PriceImage extends Model
{
    use CrudTrait;
    protected $fillable = ['image_path', 'description'];
}
