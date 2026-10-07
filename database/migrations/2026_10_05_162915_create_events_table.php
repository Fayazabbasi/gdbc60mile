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
        Schema::create('events', function (Blueprint $table) {
            $table->id();

            // Event information
            $table->string('title');
            $table->string('category')->default('Other');
            $table->date('event_date');

            // Event time
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();

            // Event location
            $table->string('location')->nullable();

            // Event description
            $table->text('description')->nullable();

            // "Learn More" URL
            $table->string('link')->nullable();

            // Active/Inactive
            $table->boolean('status')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};