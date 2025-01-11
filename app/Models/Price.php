<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use CrudTrait;
    protected $fillable = [
        'monday_thursday_price',
        'friday_non_peak',
        'friday_peak',
        'saturday_non_peak',
        'saturday_peak',
        'sunday_non_peak',
        'sunday_peak',
    ];
}
