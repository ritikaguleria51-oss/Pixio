<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('promo_grids', function (Blueprint $table) {
            $table->id();
            $table->string('large_image');
            $table->string('large_label')->nullable();
            $table->string('large_link')->nullable();
            $table->string('heading')->nullable();
            $table->text('description')->nullable();
            $table->string('heading_link')->nullable();
            $table->string('small_one_image');
            $table->string('small_one_label')->nullable();
            $table->string('small_one_link')->nullable();
            $table->string('small_two_image');
            $table->string('small_two_label')->nullable();
            $table->string('small_two_link')->nullable();
            $table->string('sale_percent')->nullable();
            $table->string('sale_text')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('promo_grids');
    }
};
