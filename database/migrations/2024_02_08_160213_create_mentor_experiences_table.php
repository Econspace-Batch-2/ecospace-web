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
        Schema::create('mentor_experiences', function (Blueprint $table) {
            $table->id();

            $table->string('mentor_experience_type', 50);
            $table->string('mentor_experience_title', 255);
            $table->string('mentor_experience_company', 255);
            $table->string('mentor_experience_time', 255);
            
            $table->unsignedBigInteger('mentor_id');
            $table->foreign('mentor_id')->references('id')->on('mentors');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentor_experiences');
    }
};
