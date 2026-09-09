<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('about_me_contents', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image')->nullable();
            $table->string('portrait_image')->nullable();
            $table->string('hero_kicker')->nullable();
            $table->string('hero_title')->nullable();
            $table->string('intro_kicker')->nullable();
            $table->string('intro_title')->nullable();
            $table->text('intro_paragraph_one')->nullable();
            $table->text('intro_paragraph_two')->nullable();
            $table->string('signature_name')->nullable();
            $table->string('signature_role')->nullable();
            $table->string('values_kicker')->nullable();
            $table->string('value_one_title')->nullable();
            $table->text('value_one_description')->nullable();
            $table->string('value_two_title')->nullable();
            $table->text('value_two_description')->nullable();
            $table->string('value_three_title')->nullable();
            $table->text('value_three_description')->nullable();
            $table->text('quote')->nullable();
            $table->string('contact_kicker')->nullable();
            $table->string('contact_title')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('instagram_handle')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('about_me_contents');
    }
};
