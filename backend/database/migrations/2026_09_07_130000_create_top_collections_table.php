<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('top_collections', function (Blueprint $table) {
            $table->id();
            $table->string('top_left_image');
            $table->string('top_right_image');
            $table->string('bottom_left_image');
            $table->string('bottom_right_image');
            $table->string('badge')->nullable();
            $table->string('heading')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('top_collections');
    }
};
