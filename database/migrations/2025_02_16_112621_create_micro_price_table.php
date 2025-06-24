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
        Schema::table('micro_price_table', function (Blueprint $table) {
            $table->string('day_range'); // Example: "Mon - Thursday"
            $table->string('guest_range'); // Example: "30 - 40 Guests"
            $table->decimal('price', 10, 2); // Example: 4199.00
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('micro_price_table', function (Blueprint $table) {
            //
        });
    }
};
