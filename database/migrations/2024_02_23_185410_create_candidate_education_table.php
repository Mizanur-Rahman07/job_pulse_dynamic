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
        Schema::create('candidate_education', function (Blueprint $table) {
            $table->id();
            $table->string('level_of_education');
            $table->string('degree_title');
            $table->string('group');
            $table->string('institute_name');
            $table->string('result');
            $table->string('cgpa');
            $table->string('scale');
            $table->string('year_of_passing');
            $table->string('duration_year');
            $table->string('board');
            $table->tinyInteger('status')->default(1);
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_education');
    }
};
