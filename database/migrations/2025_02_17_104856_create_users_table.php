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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('email', 255)->unique(); // Unique email field
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('password'); // Hashed password storage
            $table->timestamps(); // created_at & updated_at
            $table->engine = 'InnoDB'; // Ensure the table uses InnoDB engine
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
