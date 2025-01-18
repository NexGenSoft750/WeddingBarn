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
        Schema::table('time_slots', function (Blueprint $table) {
            $table->string('time', 20)->change();  // You can set the length to 20 or whatever fits your format

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('time_slots', function (Blueprint $table) {
            $table->time('time')->change();
        });
    }
};
