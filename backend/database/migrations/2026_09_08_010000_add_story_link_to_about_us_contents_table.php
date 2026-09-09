<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_us_contents', function (Blueprint $table) {
            $table->string('story_link_text')->nullable()->after('story_paragraph_two');
            $table->string('story_link_url')->nullable()->after('story_link_text');
        });
    }

    public function down(): void
    {
        Schema::table('about_us_contents', function (Blueprint $table) {
            $table->dropColumn(['story_link_text', 'story_link_url']);
        });
    }
};