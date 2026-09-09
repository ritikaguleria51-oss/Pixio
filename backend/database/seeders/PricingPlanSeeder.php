<?php

namespace Database\Seeders;

use App\Models\PricingPlan;
use Illuminate\Database\Seeder;

class PricingPlanSeeder extends Seeder
{
    public function run(): void
    {
        $plans = [
            ['name' => 'Starter Plan', 'price' => '19', 'popular' => false, 'description' => 'A simple beginning for discovering your everyday Pixio rhythm.', 'included' => [true, true, true, false, false]],
            ['name' => 'Popular Plan', 'price' => '39', 'popular' => true, 'description' => 'For shoppers ready to make their wardrobe feel more intentional.', 'included' => [true, true, true, true, false]],
            ['name' => 'Atelier Plan', 'price' => '79', 'popular' => false, 'description' => 'A considered, personal service for the full Pixio experience.', 'included' => [true, true, true, true, true]],
        ];
        $features = ['Access to all features', 'Assisted onboarding support', 'Personal style notes', 'Monthly edit review', 'Priority styling support'];
        foreach ($plans as $plan) {
            $data = array_merge($plan, [
                'hero_kicker' => 'Find your fit', 'hero_title' => 'Pricing Table', 'hero_description' => 'Choose a plan that gives your style journey the right amount of room to grow.',
                'intro_kicker' => 'A plan for every point of view', 'intro_title' => 'Style support that works at your pace.', 'intro_description' => 'Start simply, grow into more, or choose the complete Pixio experience. Every plan is designed to make discovering your style feel clear and enjoyable.',
                'monthly_label' => 'Monthly', 'yearly_label' => 'Yearly', 'yearly_badge' => 'Save 20%', 'currency' => '$', 'period_label' => '/Month', 'button_text' => 'Try For Free', 'button_url' => '/pages/contact-1', 'feature_heading' => 'Key Features:',
                'note_title' => 'Not sure which plan is right for you?', 'note_description' => 'Our style team can help you choose a starting point.', 'note_link_text' => 'Talk to an expert', 'note_link_url' => '/pages/contact-1', 'status' => true,
            ]);
            foreach ($features as $index => $feature) { $number = $index + 1; $data["feature_{$number}_name"] = $feature; $data["feature_{$number}_included"] = $plan['included'][$index]; }
            unset($data['included']);
            PricingPlan::updateOrCreate(['name' => $plan['name']], $data);
        }
    }
}