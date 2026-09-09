<?php

namespace App\Http\Controllers;

use App\Models\PricingPlan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PricingPlanController extends Controller
{
    public function index()
    {
        $plans = PricingPlan::latest()->get();
        return view('admin.pricing.all-pricing', compact('plans'));
    }

    public function create()
    {
        return view('admin.pricing.add-pricing');
    }

    public function apiIndex()
    {
        $plans = PricingPlan::where('status', true)->orderBy('id')->get();
        $first = $plans->first();
        $features = fn (PricingPlan $plan) => collect(range(1, 5))->map(fn ($number) => [
            'name' => $plan->{"feature_{$number}_name"},
            'included' => (bool) $plan->{"feature_{$number}_included"},
        ])->filter(fn ($feature) => filled($feature['name']))->values();

        return response()->json([
            'hero_image' => $first?->hero_image,
            'hero_kicker' => $first?->hero_kicker,
            'hero_title' => $first?->hero_title,
            'hero_description' => $first?->hero_description,
            'intro_kicker' => $first?->intro_kicker,
            'intro_title' => $first?->intro_title,
            'intro_description' => $first?->intro_description,
            'monthly_label' => $first?->monthly_label,
            'yearly_label' => $first?->yearly_label,
            'yearly_badge' => $first?->yearly_badge,
            'note_title' => $first?->note_title,
            'note_description' => $first?->note_description,
            'note_link_text' => $first?->note_link_text,
            'note_link_url' => $first?->note_link_url,
            'plans' => $plans->map(function (PricingPlan $plan) use ($features) {
                return array_merge($plan->toArray(), ['features' => $features($plan)]);
            })->values(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validatePlan($request);
        if ($request->hasFile('hero_image')) $validated['hero_image'] = $request->file('hero_image')->store('pricing', 'public');
        $validated['status'] = $request->boolean('status', true);
        PricingPlan::create($validated);
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan added successfully!');
    }

    public function edit(PricingPlan $pricing)
    {
        return view('admin.pricing.edit-pricing', ['plan' => $pricing]);
    }

    public function update(Request $request, PricingPlan $pricing)
    {
        $validated = $this->validatePlan($request);
        if ($request->hasFile('hero_image')) {
            if ($pricing->hero_image) Storage::disk('public')->delete($pricing->hero_image);
            $validated['hero_image'] = $request->file('hero_image')->store('pricing', 'public');
        }
        $validated['status'] = $request->boolean('status');
        $pricing->update($validated);
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan updated successfully!');
    }

    public function destroy(PricingPlan $pricing)
    {
        if ($pricing->hero_image) Storage::disk('public')->delete($pricing->hero_image);
        $pricing->delete();
        return redirect()->route('admin.pricing.index')->with('success', 'Pricing plan deleted successfully!');
    }

    private function validatePlan(Request $request): array
    {
        return $request->validate([
            'hero_image' => 'nullable|file|max:5120', 'hero_kicker' => 'nullable|string|max:255',
            'hero_title' => 'nullable|string|max:255', 'hero_description' => 'nullable|string',
            'intro_kicker' => 'nullable|string|max:255', 'intro_title' => 'nullable|string|max:255',
            'intro_description' => 'nullable|string', 'monthly_label' => 'nullable|string|max:255',
            'yearly_label' => 'nullable|string|max:255', 'yearly_badge' => 'nullable|string|max:255',
            'name' => 'required|string|max:255', 'price' => 'required|string|max:50',
            'currency' => 'nullable|string|max:10', 'period_label' => 'nullable|string|max:50',
            'description' => 'nullable|string', 'popular' => 'nullable|boolean',
            'button_text' => 'nullable|string|max:255', 'button_url' => 'nullable|string|max:255',
            'feature_heading' => 'nullable|string|max:255',
            'feature_one_name' => 'nullable|string|max:255', 'feature_one_included' => 'nullable|boolean',
            'feature_two_name' => 'nullable|string|max:255', 'feature_two_included' => 'nullable|boolean',
            'feature_three_name' => 'nullable|string|max:255', 'feature_three_included' => 'nullable|boolean',
            'feature_four_name' => 'nullable|string|max:255', 'feature_four_included' => 'nullable|boolean',
            'feature_five_name' => 'nullable|string|max:255', 'feature_five_included' => 'nullable|boolean',
            'note_title' => 'nullable|string|max:255', 'note_description' => 'nullable|string|max:255',
            'note_link_text' => 'nullable|string|max:255', 'note_link_url' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}