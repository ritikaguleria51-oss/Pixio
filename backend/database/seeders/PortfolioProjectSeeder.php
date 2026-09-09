<?php

namespace Database\Seeders;

use App\Models\PortfolioProject;
use Illuminate\Database\Seeder;

class PortfolioProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            ['name' => 'Make Your Fashion Look Mire Charming', 'category' => 'Child Trolly', 'image' => 'banner-media1.png'],
            ['name' => 'Cozy Knit Cardigan Sweater', 'category' => 'Sweater', 'image' => 'banner-media2.png'],
            ['name' => 'Sophisticated Swagger Suit', 'category' => 'Suit', 'image' => 'banner-media3.png'],
            ['name' => 'Classic Denim Skinny Jeans', 'category' => 'Jeans', 'image' => 'banner-media1.png'],
            ['name' => 'Athletic Mesh Sports Leggings', 'category' => 'Leggings', 'image' => 'banner-media2.png'],
        ];
        foreach ($projects as $index => $item) {
            PortfolioProject::updateOrCreate(['hero_title' => $item['name']], [
                'hero_breadcrumb' => 'Portfolio Details 1', 'article_title' => 'Research & Planning',
                'article_paragraph_one' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.',
                'article_paragraph_two' => 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.',
                'client' => 'Martin Stewart', 'seatpad' => '100% Polyester', 'location' => 'London, UK', 'shipping' => 'Free Shipping', 'category' => $item['category'], 'related_category' => strtoupper($item['category']),
                'previous_label' => 'Swagger', 'previous_title' => 'Sophisticated Swagger Suit', 'previous_url' => '/portfolio/details-5', 'next_label' => 'Sweater', 'next_title' => 'Cozy Knit Cardigan Sweater', 'next_url' => '/portfolio/details-2', 'status' => true,
            ]);
        }
    }
}