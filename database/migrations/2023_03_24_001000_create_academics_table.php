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
        Schema::create('academics', function (Blueprint $table) {
            $table->id();
            $table->string('outstanding_plant_student');
            $table->string('outstanding_auto_student');
            $table->string('outstanding_ref_student');
            $table->string('outstanding_electrical_student');
            $table->string('outstanding_petroleum_student');
            $table->string('outstanding_civil_student');
            $table->string('outstanding_renewable_student');
            $table->string('outstanding_level_100_student');
            $table->string('outstanding_level_200_student');
            $table->string('outstanding_level_300_student');
            $table->string('outstanding_level_400_student');
            $table->string('outstanding_HND_student');
            $table->string('outstanding_BTech_student');
            $table->string('outstanding_Welding_student');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academics');
    }
};
