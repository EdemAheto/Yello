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
        Schema::create('leaderships', function (Blueprint $table) {
            $table->id();
            $table->string('outstanding_influential_student');
            $table->string('outstanding_department');
            $table->string('outstanding_departmental_executive');
            $table->string('outstanding_faculty_executive');
            $table->string('outstanding_activist_student');
            $table->string('outstanding_wine_personality');
            $table->string('outstanding_wine_executive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leaderships');
    }
};
