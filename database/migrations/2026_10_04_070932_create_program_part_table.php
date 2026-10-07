<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_part', function (Blueprint $table) {
            $table->id();

            $table->foreignId('program_id')
                ->constrained('programs')
                ->cascadeOnDelete();

            $table->foreignId('part_id')
                ->constrained('parts')
                ->cascadeOnDelete();

            $table->decimal('fees', 10, 2)->default(0);

            $table->timestamps();

            // Prevent duplicate program-part combinations
            $table->unique(['program_id', 'part_id']);
        });
    }
//
    public function down(): void
    {
        Schema::dropIfExists('program_part');
    }
};