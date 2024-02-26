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
        Schema::create('candidate_trainings', function (Blueprint $table) {
            $table->id();
            $table->string('training_title');
            $table->string('country');
            $table->string('topics_covered');
            $table->string('training_year');
            $table->string('institute');
            $table->string('duration');
            $table->string('location');
            $table->string('skill_title');
            $table->string('skill_learn');
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
        Schema::dropIfExists('candidate_trainings');
    }
};
