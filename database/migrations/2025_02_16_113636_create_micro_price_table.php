<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('micro_price_table', function (Blueprint $table) {
            $table->id(); // Creates an auto-incrementing primary key
            $table->string('day_range'); // e.g., "Mon - Thursday"
            $table->string('guest_range'); // e.g., "30 - 40 Guests"
            $table->decimal('price', 10, 2); // e.g., 4199.00
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('micro_price_table');
    }
};
