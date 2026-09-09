<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(AboutMeSeeder::class);
        $this->call(AboutUsSeeder::class);
        $this->call(BlogPostSeeder::class);
        $this->call(PricingPlanSeeder::class);
        $this->call(ShopProductSeeder::class);
        $this->call(PortfolioProjectSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
