<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('featured_offers', function (Blueprint $table) {
            $table->id();
            $table->string('section_subtitle')->nullable();
            $table->string('section_title')->nullable();
            $table->string('see_all_text')->nullable();
            $table->string('see_all_link')->nullable();
            $table->string('tag');
            $table->string('title');
            $table->string('image');
            $table->string('background_class')->default('offer-pink');
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('featured_offers');
    }
};
