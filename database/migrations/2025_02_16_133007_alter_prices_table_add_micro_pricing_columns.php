<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->string('micro_day_range')->default('Mon - Thursday');

            // Pricing Package 1: 30 - 40 Guests, $4,199
            $table->string('micro_guest_range_1')->default('30 - 40 Guests');
            $table->decimal('micro_price_1', 10, 2)->default(4199.00);

            // Pricing Package 2: 40 - 50 Guests, $4,599
            $table->string('micro_guest_range_2')->default('40 - 50 Guests');
            $table->decimal('micro_price_2', 10, 2)->default(4599.00);

            // Pricing Package 3: 50 - 60 Guests, $4,899
            $table->string('micro_guest_range_3')->default('50 - 60 Guests');
            $table->decimal('micro_price_3', 10, 2)->default(4899.00);

            // Pricing Package 4: 60 - 70 Guests, $5,299
            $table->string('micro_guest_range_4')->default('60 - 70 Guests');
            $table->decimal('micro_price_4', 10, 2)->default(5299.00);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prices_table', function (Blueprint $table) {
            $table->dropColumn([
                'micro_day_range',
                'micro_guest_range_1',
                'micro_price_1',
                'micro_guest_range_2',
                'micro_price_2',
                'micro_guest_range_3',
                'micro_price_3',
                'micro_guest_range_4',
                'micro_price_4',
            ]);
        });
    }
};
