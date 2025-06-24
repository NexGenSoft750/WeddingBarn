<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MicroPrice extends Model
{
    protected $table = 'micro_price_table';
    protected $fillable = ['day_range', 'guest_range', 'price'];
}
