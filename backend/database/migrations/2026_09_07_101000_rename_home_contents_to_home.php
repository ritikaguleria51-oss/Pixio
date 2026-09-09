<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('home_contents') && !Schema::hasTable('home')) {
            Schema::rename('home_contents', 'home');
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('home') && !Schema::hasTable('home_contents')) {
            Schema::rename('home', 'home_contents');
        }
    }
};
