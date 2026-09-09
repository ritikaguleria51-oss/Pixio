<?php

namespace App\Http\Controllers;

use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $homeContents = HomeContent::latest()->get();

        return view('admin.home.all-home', compact('homeContents'));
    }

    public function create()
    {
        return view('admin.home.add-home');
    }

    public function apiIndex()
    {
        return response()->json(
            HomeContent::where('status', true)->latest()->first()
        );
    }

    public function store(Request $request)
    {
        $validated = $this->validateHome($request, true);

        $validated['image'] = $request->file('image')->store('home', 'public');
        $validated['status'] = true;

        HomeContent::create($validated);

        return redirect()
            ->route('admin.home.index')
            ->with('success', 'Home content added successfully!');
    }

    public function edit(HomeContent $homeContent)
    {
        return view('admin.home.edit-home', compact('homeContent'));
    }

    public function update(Request $request, HomeContent $homeContent)
    {
        $validated = $this->validateHome($request, false);

        if ($request->hasFile('image')) {
            if (!str_starts_with($homeContent->image, 'http')) {
                Storage::disk('public')->delete($homeContent->image);
            }

            $validated['image'] = $request->file('image')->store('home', 'public');
        }

        $homeContent->update($validated);

        return redirect()
            ->route('admin.home.index')
            ->with('success', 'Home content updated successfully!');
    }

    public function destroy(HomeContent $homeContent)
    {
        if (!str_starts_with($homeContent->image, 'http')) {
            Storage::disk('public')->delete($homeContent->image);
        }

        $homeContent->delete();

        return redirect()
            ->route('admin.home.index')
            ->with('success', 'Home content deleted successfully!');
    }

    private function validateHome(Request $request, bool $imageRequired): array
    {
        return $request->validate([
            'image' => ($imageRequired ? 'required|' : 'nullable|') . 'file|max:5120',
            'small_title' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'primary_button_text' => 'nullable|string|max:255',
            'primary_button_link' => 'nullable|string|max:255',
            'secondary_button_text' => 'nullable|string|max:255',
            'secondary_button_link' => 'nullable|string|max:255',
            'feature_one_value' => 'nullable|string|max:255',
            'feature_one_label' => 'nullable|string|max:255',
            'feature_two_value' => 'nullable|string|max:255',
            'feature_two_label' => 'nullable|string|max:255',
            'feature_three_value' => 'nullable|string|max:255',
            'feature_three_label' => 'nullable|string|max:255',
            'sale_prefix' => 'nullable|string|max:255',
            'sale_percent' => 'nullable|string|max:255',
            'sale_suffix' => 'nullable|string|max:255',
            'collection_label' => 'nullable|string|max:255',
            'collection_title' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}
