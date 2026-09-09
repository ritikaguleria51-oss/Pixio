<?php

namespace Database\Seeders;

use App\Models\FeaturedOffer;
use Illuminate\Database\Seeder;

class FeaturedOfferSeeder extends Seeder
{
    public function run(): void
    {
        $offers = [
            ['tag' => '20% Off', 'title' => 'Luxury Bras', 'background_class' => 'offer-pink', 'image' => 'https://images.unsplash.com/photo-1572804013309-59a88b7e92f1?q=80&w=600&auto=format&fit=crop'],
            ['tag' => 'Sale Up to 50% Off', 'title' => 'Summer 2024', 'background_class' => 'offer-blue', 'image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=600&auto=format&fit=crop'],
            ['tag' => '20% Off', 'title' => 'Swimwear Sale', 'background_class' => 'offer-light-pink', 'image' => 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=600&auto=format&fit=crop'],
            ['tag' => '30% Off', 'title' => 'Party Dresses', 'background_class' => 'offer-gray', 'image' => 'https://images.unsplash.com/photo-1496747611176-843222e1e57c?q=80&w=600&auto=format&fit=crop'],
        ];

        foreach ($offers as $offer) {
            FeaturedOffer::updateOrCreate(
                ['title' => $offer['title']],
                array_merge($offer, [
                    'section_subtitle' => 'Handpicked',
                    'section_title' => 'Featured offer for you',
                    'see_all_text' => 'See All',
                    'see_all_link' => '/shop',
                    'button_text' => 'Collect Now',
                    'button_link' => '/shop',
                    'status' => true,
                ])
            );
        }
    }
}
