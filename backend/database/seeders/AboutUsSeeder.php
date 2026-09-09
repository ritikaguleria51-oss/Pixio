<?php

namespace Database\Seeders;

use App\Models\AboutUsContent;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    public function run(): void
    {
        AboutUsContent::updateOrCreate(
            ['hero_title' => 'Your Fashion Journey Starts Here. Discover Style At Pixio.'],
            [
                'hero_kicker' => 'About Pixio',
                'stat_one_number' => '50+',
                'stat_one_label' => 'Items Sale',
                'stat_two_number' => '400%',
                'stat_two_label' => 'Return On Investment',
                'stat_three_number' => '95%',
                'stat_three_label' => 'Happy Customers',
                'story_kicker' => 'Why Pixio?',
                'story_title' => 'We believe style is a way to say who you are without having to speak.',
                'story_paragraph_one' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. At Pixio, every collection is designed to make everyday dressing feel personal, confident, and effortless.',
                'story_paragraph_two' => 'From timeless essentials to expressive seasonal pieces, we bring together quality, comfort, and the freedom to find your own look.',
                'story_link_text' => 'Explore the collection',
                'story_link_url' => '/shop',
                'experience_kicker' => 'The Pixio experience',
                'experience_title' => 'Elevate your style with a unique fashion experience.',
                'experience_paragraph_one' => "We're dedicated to creating an exclusive fashion destination that transcends the ordinary. Our passion for style, quality, and individuality drives our mission.",
                'experience_paragraph_two' => 'Our website is designed with your convenience in mind, offering secure transactions and a responsive customer support team to assist you every step of the way.',
                'signature_name' => 'Kenneth Fong',
                'signature_role' => 'CEO and founder',
                'cta_kicker' => 'Questions?',
                'cta_title' => "Our experts will help find the gear that's right for you.",
                'instagram_handle' => '@pixio.style',
                'status' => true,
            ]
        );
    }
}