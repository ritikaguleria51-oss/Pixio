<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pricing_plans', function (Blueprint $table) {
            $table->id();
            $table->string('hero_image')->nullable(); $table->string('hero_kicker')->nullable(); $table->string('hero_title')->nullable(); $table->text('hero_description')->nullable();
            $table->string('intro_kicker')->nullable(); $table->string('intro_title')->nullable(); $table->text('intro_description')->nullable(); $table->string('monthly_label')->nullable(); $table->string('yearly_label')->nullable(); $table->string('yearly_badge')->nullable();
            $table->string('name'); $table->string('price'); $table->string('currency')->default('$'); $table->string('period_label')->default('/Month'); $table->text('description')->nullable(); $table->boolean('popular')->default(false); $table->string('button_text')->nullable(); $table->string('button_url')->nullable();
            $table->string('feature_heading')->nullable();
            for ($number = 1; $number <= 5; $number++) { $table->string("feature_{$number}_name")->nullable(); $table->boolean("feature_{$number}_included")->default(false); }
            $table->string('note_title')->nullable(); $table->string('note_description')->nullable(); $table->string('note_link_text')->nullable(); $table->string('note_link_url')->nullable(); $table->boolean('status')->default(true); $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pricing_plans');
    }
};