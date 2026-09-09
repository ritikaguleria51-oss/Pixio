<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_us_contents', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image')->nullable(); $table->string('story_image')->nullable(); $table->string('detail_image')->nullable();
            $table->string('hero_kicker')->nullable(); $table->string('hero_title')->nullable();
            $table->string('stat_one_number')->nullable(); $table->string('stat_one_label')->nullable(); $table->string('stat_two_number')->nullable(); $table->string('stat_two_label')->nullable(); $table->string('stat_three_number')->nullable(); $table->string('stat_three_label')->nullable();
            $table->string('story_kicker')->nullable(); $table->string('story_title')->nullable(); $table->text('story_paragraph_one')->nullable(); $table->text('story_paragraph_two')->nullable();
            $table->string('experience_kicker')->nullable(); $table->string('experience_title')->nullable(); $table->text('experience_paragraph_one')->nullable(); $table->text('experience_paragraph_two')->nullable();
            $table->string('signature_name')->nullable(); $table->string('signature_role')->nullable(); $table->string('cta_kicker')->nullable(); $table->string('cta_title')->nullable(); $table->string('instagram_handle')->nullable();
            $table->boolean('status')->default(true); $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_us_contents');
    }
};