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
        //
        Schema::create('staff', function (Blueprint $table) {
    $table->id();

    // Basic information
    $table->string('employee_code')->unique()->nullable();
    $table->string('name');
    $table->string('father_name')->nullable();
    $table->string('cnic')->unique()->nullable();

    // Contact information
    $table->string('email')->nullable();
    $table->string('phone')->nullable();
    $table->text('address')->nullable();

    // Professional information
    $table->string('designation');
    
    $table->string('qualification')->nullable();
    $table->text('specialization')->nullable();
    
$table->foreignId('role_id')
    ->nullable()
    ->constrained('roles')
    ->nullOnDelete();

    // Organizational hierarchy
    $table->foreignId('parent_id')
        ->nullable()
        ->constrained('staff')
        ->nullOnDelete();

    // Display ordering
    $table->unsignedInteger('sort_order')->default(0);

    // Profile
    $table->string('photo')->nullable();
    $table->text('bio')->nullable();

    // Employment
    $table->date('joining_date')->nullable();
    $table->date('leaving_date')->nullable();

    // Status
    $table->boolean('is_active')->default(true);

    $table->timestamps();
    $table->softDeletes();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
