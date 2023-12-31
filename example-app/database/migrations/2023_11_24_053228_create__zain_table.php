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
        Schema::create('zain', function (Blueprint $table) {
            $table->id();
            $table->string('Firstname' , 255);
            $table->string('lastname' , 255);
            $table->string('Email' , 255);
            $table->string('Password' , 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_zain');
    }
};
