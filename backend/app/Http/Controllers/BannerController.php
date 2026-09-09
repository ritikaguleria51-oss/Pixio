<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    // Get all active banners
    public function index()
    {
        $banners = Banner::where('status', true)
            ->orderBy('id')
            ->get();

        return response()->json($banners);
    }

    // Store new banner
public function store(Request $request)
{
    try {

      $request->validate([
    'image' => 'required|file|max:5120',
    'title' => 'nullable|string|max:255',
    'subtitle' => 'nullable|string|max:255',
    'description' => 'nullable|string',
    'button_text' => 'nullable|string|max:255',
    'button_link' => 'nullable|string|max:255',
    'position' => 'required|in:left,right',
]);
        // Image save
        $imagePath = $request->file('image')->store('banners', 'public');

        // Database insert
        $banner = Banner::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'description' => $request->description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => $imagePath,
            'position' => $request->position,
            'status' => true,
        ]);

        // IMPORTANT: abhi redirect nahi
       return redirect()
    ->route('admin.banners.create')
    ->with('success', 'Banner added successfully!');

    } catch (\Throwable $e) {

        dd([
            'ERROR' => $e->getMessage(),
            'FILE' => $e->getFile(),
            'LINE' => $e->getLine(),
        ]);
    }
}

    public function edit(Banner $banner)
    {
        return view('admin.banners.edit-banners', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'image' => 'nullable|file|max:5120',
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'position' => 'required|in:left,right',
            'status' => 'required|boolean',
        ]);

        if ($request->hasFile('image')) {
            if ($banner->image) {
                Storage::disk('public')->delete($banner->image);
            }

            $validated['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($validated);

        return redirect()
            ->route('admin.banners.index')
            ->with('success', 'Banner updated successfully!');
    }

    public function destroy(Banner $banner)
    {
        if ($banner->image) {
            Storage::disk('public')->delete($banner->image);
        }

        $banner->delete();

        return redirect()
            ->route('admin.banners.index')
            ->with('success', 'Banner deleted successfully!');
    }
}