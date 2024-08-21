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
        Schema::create('menu_lunch_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId("menu_lunch_id")->constrained('menu_lunchs');
            $table->string("url", 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_lunch_images');
    }
};
