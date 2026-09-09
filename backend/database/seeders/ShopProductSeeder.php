<?php

namespace Database\Seeders;

use App\Models\ShopProduct;
use Illuminate\Database\Seeder;

class ShopProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Cozy Knit Cardigan Sweater', 'Fashion', 'banner-media1.png'], ['Sophisticated Swagger Suit', 'Style guide', 'banner-media2.png'], ['Classic Denim Skinny Jeans', 'Fashion', 'banner-media3.png'],
            ['Athletic Mesh Sports Leggings', 'Lifestyle', 'banner-media1.png'], ['Vintage Denim Overalls Shorts', 'Fashion', 'banner-media2.png'], ['Satin Wrap Party Blouse', 'Style guide', 'banner-media3.png'],
            ['Plaid Wool Winter Coat', 'Coat', 'banner-media1.png'], ['Water-Resistant Windbreaker Jacket', 'Jacket', 'banner-media2.png'], ['Comfy Lounge Jogger Pants', 'Lifestyle', 'banner-media3.png'],
            ['Stylish Fedora Hat Collection', 'Accessories', 'banner-media1.png'], ['Suede Ankle Booties Collection', 'Boots', 'banner-media2.png'], ['Hiking Outdoor Gear Collection', 'Lifestyle', 'banner-media3.png'],
        ];
        foreach ($products as [$name, $category, $image]) {
            ShopProduct::updateOrCreate(['name' => $name], [
                'hero_title' => 'Shop Standard', 'category_names' => 'Dresses|Top & Blouses|Boots|Jewelry|Makeup|Fragrances|Shaving & Grooming|Jacket|Coat', 'category_counts' => '10|05|17|13|06|17|13|06|22',
                'colors' => 'Black|White|Red|Blue|Green', 'sizes' => 'XS|S|M|L|XL', 'tags' => 'Vintage|Wedding|Cotton|Linen|Navy|Urban|Formal',
                'category' => $category, 'price' => '$80', 'sale_label' => 'GET 20% OFF', 'status' => true,
            ]);
        }
    }
}