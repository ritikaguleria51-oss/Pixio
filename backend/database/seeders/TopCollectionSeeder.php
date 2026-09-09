<?php

namespace Database\Seeders;

use App\Models\TopCollection;
use Illuminate\Database\Seeder;

class TopCollectionSeeder extends Seeder
{
    public function run(): void
    {
        TopCollection::updateOrCreate(
            ['id' => 1],
            [
                'top_left_image' => 'https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?q=80&w=300&auto=format&fit=crop',
                'top_right_image' => 'https://images.unsplash.com/photo-1529139574466-a303027c1d8b?q=80&w=300&auto=format&fit=crop',
                'bottom_left_image' => 'https://images.unsplash.com/photo-1509631179647-0177331693ae?q=80&w=300&auto=format&fit=crop',
                'bottom_right_image' => 'https://images.unsplash.com/photo-1539109136881-3be0616acf4b?q=80&w=300&auto=format&fit=crop',
                'badge' => 'Exclusive Showcase',
                'heading' => 'Upgrade your style with our top-notch collection.',
                'button_text' => 'All Collections',
                'button_link' => '/shop',
                'status' => true,
            ]
        );
    }
}
