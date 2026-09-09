<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shop_products', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title')->nullable(); $table->string('hero_image')->nullable();
            $table->text('category_names')->nullable(); $table->text('category_counts')->nullable(); $table->text('colors')->nullable(); $table->text('sizes')->nullable(); $table->text('tags')->nullable();
            $table->string('name'); $table->string('category')->nullable(); $table->string('image')->nullable(); $table->string('price')->nullable(); $table->string('sale_label')->nullable(); $table->boolean('status')->default(true); $table->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('shop_products'); }
};