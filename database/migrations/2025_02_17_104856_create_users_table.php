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
            $table->id(); 
            $table->string('email', 255)->unique(); 
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('password'); 
            $table->timestamps(); 
            $table->engine = 'InnoDB';
        });
        
    }

 
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
