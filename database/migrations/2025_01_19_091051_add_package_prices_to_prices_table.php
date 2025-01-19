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
            $table->decimal('multi_day_friday_saturday_peak', 8, 2)->nullable();
            $table->decimal('multi_day_friday_saturday_non_peak', 8, 2)->nullable();
            $table->decimal('multi_day_saturday_sunday_peak', 8, 2)->nullable();
            $table->decimal('multi_day_saturday_sunday_non_peak', 8, 2)->nullable();
            $table->decimal('full_weekend_peak', 8, 2)->nullable();
            $table->decimal('full_weekend_non_peak', 8, 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prices', function (Blueprint $table) {
            $table->dropColumn([
                'multi_day_friday_saturday_peak',
                'multi_day_friday_saturday_non_peak',
                'multi_day_saturday_sunday_peak',
                'multi_day_saturday_sunday_non_peak',
                'full_weekend_peak',
                'full_weekend_non_peak',
            ]);
        });
    }
};
