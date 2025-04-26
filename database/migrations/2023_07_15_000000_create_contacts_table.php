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
        // Only run if contacts table doesn't exist
        if (!Schema::hasTable('contacts')) {
            Schema::create('contacts', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('email');
                $table->enum('type', ['instructor', 'student']);
                $table->string('specialty')->nullable();
                $table->string('instructor_id')->nullable();
                $table->text('message')->nullable();
                $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
                $table->timestamps();
            });
        }
        
        // Check if the interests column exists, and add it if it doesn't
        if (Schema::hasTable('contacts') && !Schema::hasColumn('contacts', 'interests')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->string('interests')->nullable()->after('instructor_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Only drop the table if this migration created it
        if (!Schema::hasTable('contacts')) {
            Schema::dropIfExists('contacts');
        } else if (Schema::hasColumn('contacts', 'interests')) {
            // Only drop the interests column if it exists
            Schema::table('contacts', function (Blueprint $table) {
                $table->dropColumn('interests');
            });
        }
    }
};
