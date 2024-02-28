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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('candidate_first_name');
            $table->string('candidate_last_name');
            $table->text('image');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('marital_status');
            $table->string('national_id');
            $table->string('height');
            $table->string('weight');
            $table->string('blood_group');
            $table->string('phone_no');
            $table->string('alternative_phone_no');
            $table->string('email_address');
            $table->string('alternative_email');
            $table->string('career_objective');
            $table->string('career_summary');
            $table->string('special_qualification');
            $table->string('present_address');
            $table->string('permanent_address');
            $table->string('job_category');
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
        Schema::dropIfExists('personal_information');
    }
};
