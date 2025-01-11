<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;

class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Price::create([
            'monday_thursday_price' => 100.00,
            'friday_non_peak' => 120.00,
            'friday_peak' => 180.00,
            'saturday_non_peak' => 130.00,
            'saturday_peak' => 190.00,
            'sunday_non_peak' => 110.00,
            'sunday_peak' => 170.00,
        ]);
    }
}
