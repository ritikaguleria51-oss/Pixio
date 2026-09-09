<?php

namespace App\Http\Controllers;

use App\Models\AboutUsContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutContents = AboutUsContent::latest()->get();
        return view('admin.about-us.all-about-us', compact('aboutContents'));
    }

    public function create()
    {
        return view('admin.about-us.add-about-us');
    }

    public function apiIndex()
    {
        return response()->json(AboutUsContent::where('status', true)->latest()->first());
    }

    public function store(Request $request)
    {
        $validated = $this->validateContent($request, true);
        foreach (['hero_image', 'story_image', 'detail_image'] as $image) {
            $validated[$image] = $request->file($image)->store('about-us', 'public');
        }
        $validated['status'] = $request->boolean('status', true);
        AboutUsContent::create($validated);
        return redirect()->route('admin.about-us.index')->with('success', 'About Us content added successfully!');
    }

    public function edit(AboutUsContent $aboutUsContent)
    {
        return view('admin.about-us.edit-about-us', compact('aboutUsContent'));
    }

    public function update(Request $request, AboutUsContent $aboutUsContent)
    {
        $validated = $this->validateContent($request, false);
        foreach (['hero_image', 'story_image', 'detail_image'] as $image) {
            if ($request->hasFile($image)) {
                if ($aboutUsContent->{$image}) Storage::disk('public')->delete($aboutUsContent->{$image});
                $validated[$image] = $request->file($image)->store('about-us', 'public');
            }
        }
        $validated['status'] = $request->boolean('status');
        $aboutUsContent->update($validated);
        return redirect()->route('admin.about-us.index')->with('success', 'About Us content updated successfully!');
    }

    public function destroy(AboutUsContent $aboutUsContent)
    {
        foreach (['hero_image', 'story_image', 'detail_image'] as $image) {
            if ($aboutUsContent->{$image}) Storage::disk('public')->delete($aboutUsContent->{$image});
        }
        $aboutUsContent->delete();
        return redirect()->route('admin.about-us.index')->with('success', 'About Us content deleted successfully!');
    }

    private function validateContent(Request $request, bool $imagesRequired): array
    {
        $imageRule = $imagesRequired ? 'required|' : 'nullable|';
        return $request->validate([
            'hero_image' => $imageRule . 'file|max:5120', 'story_image' => $imageRule . 'file|max:5120', 'detail_image' => $imageRule . 'file|max:5120',
            'hero_kicker' => 'nullable|string|max:255', 'hero_title' => 'nullable|string|max:255',
            'stat_one_number' => 'nullable|string|max:255', 'stat_one_label' => 'nullable|string|max:255',
            'stat_two_number' => 'nullable|string|max:255', 'stat_two_label' => 'nullable|string|max:255',
            'stat_three_number' => 'nullable|string|max:255', 'stat_three_label' => 'nullable|string|max:255',
            'story_kicker' => 'nullable|string|max:255', 'story_title' => 'nullable|string|max:255',
            'story_paragraph_one' => 'nullable|string', 'story_paragraph_two' => 'nullable|string',
            'story_link_text' => 'nullable|string|max:255', 'story_link_url' => 'nullable|string|max:255',
            'experience_kicker' => 'nullable|string|max:255', 'experience_title' => 'nullable|string|max:255',
            'experience_paragraph_one' => 'nullable|string', 'experience_paragraph_two' => 'nullable|string',
            'signature_name' => 'nullable|string|max:255', 'signature_role' => 'nullable|string|max:255',
            'cta_kicker' => 'nullable|string|max:255', 'cta_title' => 'nullable|string|max:255',
            'instagram_handle' => 'nullable|string|max:255', 'status' => 'nullable|boolean',
        ]);
    }
}