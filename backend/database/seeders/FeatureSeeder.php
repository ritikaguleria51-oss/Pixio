<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            ['name' => 'Shirts', 'image' => 'https://images.unsplash.com/photo-1596755389378-c31d21fd1273?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'Shorts', 'image' => 'https://images.unsplash.com/photo-1591195853828-11db59a44f6b?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'T-Shirt', 'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'Jeans', 'image' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'Jackets', 'image' => 'https://images.unsplash.com/photo-1551028719-00167b16eac5?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'Dresses', 'image' => 'https://images.unsplash.com/photo-1595777457583-95e059d581b8?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'Hoodies', 'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?auto=format&fit=crop&w=500&q=80'],
            ['name' => 'Sneakers', 'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?auto=format&fit=crop&w=500&q=80'],
        ];

        foreach ($features as $feature) {
            Feature::updateOrCreate(
                ['name' => $feature['name']],
                array_merge($feature, [
                    'section_small_title' => 'TRENDING NOW',
                    'section_title' => 'Featured Categories',
                    'section_description' => 'Discover the most trending products in Pixio.',
                    'explore_text' => 'EXPLORE • MORE • COLLECTION •',
                    'status' => true,
                ])
            );
        }
    }
}
