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
        /** TOPIC DI DALAM SUBJECT */
        Schema::create('topics', function (Blueprint $table) {
            $table->id();
            $table->integer('topic_number');
            $table->string('topic_title', 1000);
            $table->json('topic_content');
            $table->string('topic_objective', 1000);

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('topics');
    }
};
