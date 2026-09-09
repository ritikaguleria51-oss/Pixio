<?php

namespace App\Http\Controllers;

use App\Models\AboutMeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutMeController extends Controller
{
    public function index()
    {
        $aboutContents = AboutMeContent::latest()->get();

        return view('admin.about-me.all-about-me', compact('aboutContents'));
    }

    public function create()
    {
        return view('admin.about-me.add-about-me');
    }

    public function apiIndex()
    {
        return response()->json(AboutMeContent::where('status', true)->latest()->first());
    }

    public function store(Request $request)
    {
        $validated = $this->validateContent($request, true);
        $validated['hero_image'] = $request->file('hero_image')->store('about-me', 'public');
        $validated['portrait_image'] = $request->file('portrait_image')->store('about-me', 'public');
        $validated['status'] = $request->boolean('status', true);

        AboutMeContent::create($validated);

        return redirect()->route('admin.about-me.index')->with('success', 'About Me content added successfully!');
    }

    public function edit(AboutMeContent $aboutMeContent)
    {
        return view('admin.about-me.edit-about-me', compact('aboutMeContent'));
    }

    public function update(Request $request, AboutMeContent $aboutMeContent)
    {
        $validated = $this->validateContent($request, false);

        foreach (['hero_image', 'portrait_image'] as $image) {
            if ($request->hasFile($image)) {
                if ($aboutMeContent->{$image}) {
                    Storage::disk('public')->delete($aboutMeContent->{$image});
                }
                $validated[$image] = $request->file($image)->store('about-me', 'public');
            }
        }

        $validated['status'] = $request->boolean('status');
        $aboutMeContent->update($validated);

        return redirect()->route('admin.about-me.index')->with('success', 'About Me content updated successfully!');
    }

    public function destroy(AboutMeContent $aboutMeContent)
    {
        foreach (['hero_image', 'portrait_image'] as $image) {
            if ($aboutMeContent->{$image}) {
                Storage::disk('public')->delete($aboutMeContent->{$image});
            }
        }

        $aboutMeContent->delete();

        return redirect()->route('admin.about-me.index')->with('success', 'About Me content deleted successfully!');
    }

    private function validateContent(Request $request, bool $imagesRequired): array
    {
        $imageRule = $imagesRequired ? 'required|' : 'nullable|';

        return $request->validate([
            'hero_image' => $imageRule . 'file|max:5120',
            'portrait_image' => $imageRule . 'file|max:5120',
            'hero_kicker' => 'nullable|string|max:255',
            'hero_title' => 'nullable|string|max:255',
            'intro_kicker' => 'nullable|string|max:255',
            'intro_title' => 'nullable|string|max:255',
            'intro_paragraph_one' => 'nullable|string',
            'intro_paragraph_two' => 'nullable|string',
            'signature_name' => 'nullable|string|max:255',
            'signature_role' => 'nullable|string|max:255',
            'values_kicker' => 'nullable|string|max:255',
            'value_one_title' => 'nullable|string|max:255',
            'value_one_description' => 'nullable|string',
            'value_two_title' => 'nullable|string|max:255',
            'value_two_description' => 'nullable|string',
            'value_three_title' => 'nullable|string|max:255',
            'value_three_description' => 'nullable|string',
            'quote' => 'nullable|string',
            'contact_kicker' => 'nullable|string|max:255',
            'contact_title' => 'nullable|string|max:255',
            'contact_email' => 'nullable|email|max:255',
            'instagram_handle' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}
