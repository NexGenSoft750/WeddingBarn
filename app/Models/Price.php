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
        'full_weekend_only',

        // Micro pricing columns
        'micro_day_range',
        'micro_guest_range_1',
        'micro_price_1',
        'micro_guest_range_2',
        'micro_price_2',
        'micro_guest_range_3',
        'micro_price_3',
        'micro_guest_range_4',
        'micro_price_4',
    ];
}
