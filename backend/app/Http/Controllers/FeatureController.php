<?php

namespace App\Http\Controllers;

use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::latest()->get();

        return view('admin.features.all-features', compact('features'));
    }

    public function create()
    {
        return view('admin.features.add-features');
    }

    public function apiIndex()
    {
        return response()->json(
            Feature::where('status', true)->orderBy('id')->get()
        );
    }

    public function store(Request $request)
    {
        $validated = $this->validateFeature($request, true);
        $validated['image'] = $request->file('image')->store('features', 'public');
        $validated['status'] = true;

        Feature::create($validated);

        return redirect()
            ->route('admin.features.index')
            ->with('success', 'Feature added successfully!');
    }

    public function edit(Feature $feature)
    {
        return view('admin.features.edit-features', compact('feature'));
    }

    public function update(Request $request, Feature $feature)
    {
        $validated = $this->validateFeature($request, false);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($feature->image);
            $validated['image'] = $request->file('image')->store('features', 'public');
        }

        $feature->update($validated);

        return redirect()
            ->route('admin.features.index')
            ->with('success', 'Feature updated successfully!');
    }

    public function destroy(Feature $feature)
    {
        Storage::disk('public')->delete($feature->image);
        $feature->delete();

        return redirect()
            ->route('admin.features.index')
            ->with('success', 'Feature deleted successfully!');
    }

    private function validateFeature(Request $request, bool $imageRequired): array
    {
        return $request->validate([
            'image' => ($imageRequired ? 'required|' : 'nullable|') . 'file|max:5120',
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'section_small_title' => 'nullable|string|max:255',
            'section_title' => 'nullable|string|max:255',
            'section_description' => 'nullable|string',
            'explore_text' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}
