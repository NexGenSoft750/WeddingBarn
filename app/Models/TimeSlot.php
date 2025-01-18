<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use CrudTrait;
    protected $fillable = ['time', 'period'];
}
