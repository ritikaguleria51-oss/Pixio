<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_projects', function (Blueprint $table) {
            $table->id(); $table->string('hero_title'); $table->string('hero_breadcrumb')->nullable(); $table->string('image_main')->nullable(); $table->string('image_two')->nullable(); $table->string('image_three')->nullable();
            $table->string('article_title')->nullable(); $table->text('article_paragraph_one')->nullable(); $table->text('article_paragraph_two')->nullable(); $table->string('client')->nullable(); $table->string('seatpad')->nullable(); $table->string('location')->nullable(); $table->string('shipping')->nullable(); $table->string('category')->nullable();
            $table->string('previous_label')->nullable(); $table->string('previous_title')->nullable(); $table->string('previous_url')->nullable(); $table->string('next_label')->nullable(); $table->string('next_title')->nullable(); $table->string('next_url')->nullable(); $table->string('related_category')->nullable(); $table->boolean('status')->default(true); $table->timestamps();
        });
    }
    public function down(): void { Schema::dropIfExists('portfolio_projects'); }
};