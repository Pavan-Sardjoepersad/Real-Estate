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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('postal_code');
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->unsignedInteger('bedrooms');
            $table->unsignedInteger('bathrooms');
            $table->string('slug');
            $table->unsignedInteger('home_sqft');
            $table->unsignedInteger('plot_sqft');
            $table->string('seller');
            $table->enum('status',['sold','for sale','negotiating','rented', 'for rent']);
            $table->enum('type', ['apartment', 'residential', 'villa']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
