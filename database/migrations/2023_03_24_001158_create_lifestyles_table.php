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
        Schema::create('lifestyles', function (Blueprint $table) {
            $table->id();
            $table->string('outstanding_fashionista_male');
            $table->string('outstanding_fashionista_female');
            $table->string('outstanding_blogger');
            $table->string('outstanding_clique');
            $table->string('outstanding_influential_student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lifestyles');
    }
};
