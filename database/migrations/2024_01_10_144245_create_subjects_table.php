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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('subject_image', 50);
            $table->string('subject_tutor', 50);

            $table->string('subject_title', 50);
            $table->json('subject_majors');
            $table->string('subject_category', 50);
            $table->string('subject_semester', 50);

            $table->text('subject_description');
            $table->json('subject_references');
            $table->json('subject_univ');
            $table->json('univ');

            $table->string('status')->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
