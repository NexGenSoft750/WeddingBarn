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
        'multi_day_friday_saturday_peak',
        'multi_day_friday_saturday_non_peak',
        'multi_day_saturday_sunday_peak',
        'multi_day_saturday_sunday_non_peak',
        'full_weekend_peak',
        'full_weekend_non_peak',
        'full_weekend_only', // Include all columns here
    ];
}
