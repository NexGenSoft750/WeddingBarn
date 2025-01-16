<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

class TourBooking extends Model
{
    use CrudTrait;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'fiance_first_name',
        'fiance_last_name',
        'wedding_date',
        'message',
        'tour_date',
        'tour_time',
        'tour_type',

    ];
}
