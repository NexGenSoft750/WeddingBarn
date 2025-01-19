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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->decimal('monday_thursday_price', 8, 2)->nullable();
            $table->decimal('friday_non_peak', 8, 2)->nullable();
            $table->decimal('friday_peak', 8, 2)->nullable();
            $table->decimal('saturday_non_peak', 8, 2)->nullable();
            $table->decimal('saturday_peak', 8, 2)->nullable();
            $table->decimal('sunday_non_peak', 8, 2)->nullable();
            $table->decimal('sunday_peak', 8, 2)->nullable();
            $table->decimal('multi_day_friday_saturday_peak', 8, 2)->nullable();
            $table->decimal('multi_day_friday_saturday_non_peak', 8, 2)->nullable();
            $table->decimal('multi_day_saturday_sunday_peak', 8, 2)->nullable();
            $table->decimal('multi_day_saturday_sunday_non_peak', 8, 2)->nullable();
            $table->decimal('full_weekend_peak', 8, 2)->nullable();
            $table->decimal('full_weekend_non_peak', 8, 2)->nullable();
            $table->decimal('full_weekend_only', 8, 2)->nullable(); // Field for full weekend only
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prices');
    }
};
