<?php

namespace Database\Seeders;

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            ['title' => 'Cozy Knit Cardigan Sweater', 'category' => 'Fashion'],
            ['title' => 'Sophisticated Swagger Suit', 'category' => 'Style guide'],
            ['title' => 'Athletic Mesh Sports Leggings', 'category' => 'Lifestyle'],
        ];

        foreach ($posts as $post) {
            BlogPost::updateOrCreate(
                ['title' => $post['title']],
                array_merge($post, [
                    'eyebrow' => 'The Pixio journal',
                    'page_title' => 'Stories, style and everyday inspiration.',
                    'page_intro' => 'Discover new looks, thoughtful guides, and the latest notes from the Pixio team.',
                    'link_text' => 'Read article',
                    'link_url' => '/blog',
                    'status' => true,
                ])
            );
        }
    }
}