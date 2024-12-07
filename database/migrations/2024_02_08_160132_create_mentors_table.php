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
        Schema::create('mentors', function (Blueprint $table) {
            $table->id();
            $table->string('mentor_name', 255);
            $table->string('mentor_position', 255);
            $table->string('mentor_company', 255);
            $table->string('mentor_thumbnail', 255); // gambar tutor di view all page
            $table->string('mentor_profile', 255); // gambar tutor di detail page
            $table->string('mentor_linkedin', 255); // link linkedin
            $table->json('mentor_achievements'); //achievent mentor dalam array.
            $table->json('mentor_category'); // tag di detail
            $table->json('mentor_photo_journey'); // foto slideshow di detail

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentors');
    }
};
