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
        Schema::table('permissions', function (Blueprint $table) {
            //
            $table->foreignId('permission_role_id')
        ->nullable()
        ->after('id')
        ->constrained('permissions')
        ->nullOnDelete();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            //
            $table->dropForeign(['permission_role_id']);
            $table->dropColumn('permission_role_id');
        });
    }
};
