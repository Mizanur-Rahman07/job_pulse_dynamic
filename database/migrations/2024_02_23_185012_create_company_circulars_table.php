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
        Schema::create('company_circulars', function (Blueprint $table) {
            $table->id();
            $table->integer('company_id');
            $table->string('vacancy');
            $table->string('job_location');
            $table->string('salary');
            $table->string('experience');
            $table->string('published_date');
            $table->string('application_deadline');
            $table->text('education_requirments');
            $table->text('responsibilities_context');
            $table->text('compensation_other_benefits');
            $table->string('workplace');
            $table->string('employment_status');
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
        Schema::dropIfExists('company_circulars');
    }
};
