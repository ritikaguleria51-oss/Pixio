<?php

namespace Database\Seeders;

use App\Models\PromoGrid;
use Illuminate\Database\Seeder;

class PromoGridSeeder extends Seeder
{
    public function run(): void
    {
        PromoGrid::updateOrCreate(
            ['id' => 1],
            [
                'large_image' => 'https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=1000&auto=format&fit=crop',
                'large_label' => 'Woman collection',
                'large_link' => '/shop',
                'heading' => 'Set your wardrobe with our amazing selection!',
                'description' => 'Discover effortless sophistication with our handpicked season staples, designed for ultimate comfort and contemporary elegance.',
                'heading_link' => '/shop',
                'small_one_image' => 'https://images.unsplash.com/photo-1503944583220-79d8926ad5e2?q=80&w=600&auto=format&fit=crop',
                'small_one_label' => 'Child Fashion',
                'small_one_link' => '/shop',
                'small_two_image' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?q=80&w=600&auto=format&fit=crop',
                'small_two_label' => 'Man collection',
                'small_two_link' => '/shop',
                'sale_percent' => '50%',
                'sale_text' => 'Sale',
                'status' => true,
            ]
        );
    }
}
