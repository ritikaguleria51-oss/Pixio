<?php

namespace Database\Seeders;

use App\Models\AboutMeContent;
use Illuminate\Database\Seeder;

class AboutMeSeeder extends Seeder
{
    public function run(): void
    {
        AboutMeContent::updateOrCreate(
            ['hero_title' => 'About Me'],
            [
                'hero_kicker' => 'The person behind Pixio',
                'intro_kicker' => "Hello, I'm Kenneth",
                'intro_title' => 'Pixio. Your style, quality, individuality. Redefining fashion together.',
                'intro_paragraph_one' => 'At Pixio, we are on a mission to redefine fashion by blending style, quality, and individuality into every garment we offer. I believe that what you wear is an extension of your unique personality, and it should reflect your values and aspirations.',
                'intro_paragraph_two' => 'Every collection starts with a simple question: how can clothing help you feel more like yourself? The answer lives in the details, the fit, and the freedom to make a look your own.',
                'signature_name' => 'Kenneth Fong',
                'signature_role' => 'Founder & creative director',
                'values_kicker' => 'What I believe',
                'value_one_title' => 'Style should feel personal.',
                'value_one_description' => 'Trends are an invitation, never a rule. The best wardrobe is the one that sounds like you.',
                'value_two_title' => 'Quality earns its place.',
                'value_two_description' => 'Good materials, thoughtful construction, and pieces made to stay in rotation matter.',
                'value_three_title' => 'Shopping can feel human.',
                'value_three_description' => 'Clear advice, considered service, and a little delight should be part of every order.',
                'quote' => 'Clothes are not the answer to who we are. They are a beautiful way to ask the question.',
                'contact_kicker' => 'Stay in touch',
                'contact_title' => 'Have a thought, a question, or a great outfit idea?',
                'contact_email' => 'hello@pixio.style',
                'instagram_handle' => '@pixio.style',
                'status' => true,
            ]
        );
    }
}
