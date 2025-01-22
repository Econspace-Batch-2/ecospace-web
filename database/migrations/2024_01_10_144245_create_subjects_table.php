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
            $table->string('image', 50);
            $table->string('tutor', 50);

            $table->string('title', 50);
            $table->json('majors');
            $table->string('category', 50);
            $table->string('semester', 50);

            $table->text('description');
            $table->json('references');
            $table->json('subject_univ');
            $table->json('univ');

            $table->string('status')->default('active');

            $table->string('appointlet_url')->nullable();

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
