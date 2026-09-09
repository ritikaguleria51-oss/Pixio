<?php

namespace App\Http\Controllers;

use App\Models\FeaturedOffer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeaturedOfferController extends Controller
{
    public function index()
    {
        $featuredOffers = FeaturedOffer::latest()->get();
        return view('admin.featured-offers.all-featured-offers', compact('featuredOffers'));
    }

    public function create()
    {
        return view('admin.featured-offers.add-featured-offers');
    }

    public function apiIndex()
    {
        return response()->json(FeaturedOffer::where('status', true)->orderBy('id')->get());
    }

    public function store(Request $request)
    {
        $validated = $this->validateOffer($request, true);
        $validated['image'] = $request->file('image')->store('featured-offers', 'public');
        $validated['status'] = true;
        FeaturedOffer::create($validated);
        return redirect()->route('admin.featured-offers.index')->with('success', 'Featured offer added successfully!');
    }

    public function edit(FeaturedOffer $featuredOffer)
    {
        return view('admin.featured-offers.edit-featured-offers', compact('featuredOffer'));
    }

    public function update(Request $request, FeaturedOffer $featuredOffer)
    {
        $validated = $this->validateOffer($request, false);
        if ($request->hasFile('image')) {
            if (!str_starts_with($featuredOffer->image, 'http')) Storage::disk('public')->delete($featuredOffer->image);
            $validated['image'] = $request->file('image')->store('featured-offers', 'public');
        }
        $featuredOffer->update($validated);
        return redirect()->route('admin.featured-offers.index')->with('success', 'Featured offer updated successfully!');
    }

    public function destroy(FeaturedOffer $featuredOffer)
    {
        if (!str_starts_with($featuredOffer->image, 'http')) Storage::disk('public')->delete($featuredOffer->image);
        $featuredOffer->delete();
        return redirect()->route('admin.featured-offers.index')->with('success', 'Featured offer deleted successfully!');
    }

    private function validateOffer(Request $request, bool $required): array
    {
        return $request->validate([
            'image' => ($required ? 'required|' : 'nullable|') . 'file|max:5120',
            'section_subtitle' => 'nullable|string|max:255', 'section_title' => 'nullable|string|max:255',
            'see_all_text' => 'nullable|string|max:255', 'see_all_link' => 'nullable|string|max:255',
            'tag' => 'required|string|max:255', 'title' => 'required|string|max:255',
            'background_class' => 'required|in:offer-pink,offer-blue,offer-light-pink,offer-gray',
            'button_text' => 'nullable|string|max:255', 'button_link' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}
