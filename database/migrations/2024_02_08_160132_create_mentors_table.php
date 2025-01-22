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
            $table->string('name', 255);
            $table->string('position', 255);
            $table->string('company', 255);
            $table->string('thumbnail', 255); // gambar tutor di view all page
            $table->string('profile', 255); // gambar tutor di detail page
            $table->string('linkedin', 255); // link linkedin
            $table->json('achievements'); //achievent mentor dalam array.
            $table->json('category'); // tag di detail
            $table->json('photo_journey'); // foto slideshow di detail
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
