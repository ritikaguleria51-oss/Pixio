<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->string('eyebrow')->nullable();
            $table->string('page_title')->nullable();
            $table->text('page_intro')->nullable();
            $table->string('title');
            $table->string('category');
            $table->string('image')->nullable();
            $table->string('link_text')->nullable();
            $table->string('link_url')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_posts');
    }
};