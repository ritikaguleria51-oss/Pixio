<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('small_title')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->string('primary_button_text')->nullable();
            $table->string('primary_button_link')->nullable();
            $table->string('secondary_button_text')->nullable();
            $table->string('secondary_button_link')->nullable();
            $table->string('feature_one_value')->nullable();
            $table->string('feature_one_label')->nullable();
            $table->string('feature_two_value')->nullable();
            $table->string('feature_two_label')->nullable();
            $table->string('feature_three_value')->nullable();
            $table->string('feature_three_label')->nullable();
            $table->string('sale_prefix')->nullable();
            $table->string('sale_percent')->nullable();
            $table->string('sale_suffix')->nullable();
            $table->string('collection_label')->nullable();
            $table->string('collection_title')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_contents');
    }
};
