<?php

namespace App\Http\Controllers;

use App\Models\PortfolioProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioProjectController extends Controller
{
    public function index()
    {
        $projects = PortfolioProject::latest()->get();
        return view('admin.portfolio.all-portfolio', compact('projects'));
    }

    public function create()
    {
        return view('admin.portfolio.add-portfolio');
    }

    public function apiIndex()
    {
        $projects = PortfolioProject::where('status', true)->latest()->get();
        $project = $projects->first();
        return response()->json(['project' => $project, 'related' => $projects->values()]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateProject($request);
        foreach (['image_main', 'image_two', 'image_three'] as $image) {
            if ($request->hasFile($image)) $validated[$image] = $request->file($image)->store('portfolio', 'public');
        }
        $validated['status'] = $request->boolean('status', true);
        PortfolioProject::create($validated);
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio project added successfully!');
    }

    public function edit(PortfolioProject $portfolio)
    {
        return view('admin.portfolio.edit-portfolio', ['project' => $portfolio]);
    }

    public function update(Request $request, PortfolioProject $portfolio)
    {
        $validated = $this->validateProject($request);
        foreach (['image_main', 'image_two', 'image_three'] as $image) {
            if ($request->hasFile($image)) {
                if ($portfolio->{$image}) Storage::disk('public')->delete($portfolio->{$image});
                $validated[$image] = $request->file($image)->store('portfolio', 'public');
            }
        }
        $validated['status'] = $request->boolean('status');
        $portfolio->update($validated);
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio project updated successfully!');
    }

    public function destroy(PortfolioProject $portfolio)
    {
        foreach (['image_main', 'image_two', 'image_three'] as $image) if ($portfolio->{$image}) Storage::disk('public')->delete($portfolio->{$image});
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Portfolio project deleted successfully!');
    }

    private function validateProject(Request $request): array
    {
        return $request->validate([
            'hero_title' => 'required|string|max:255', 'hero_breadcrumb' => 'nullable|string|max:255',
            'image_main' => 'nullable|file|max:5120', 'image_two' => 'nullable|file|max:5120', 'image_three' => 'nullable|file|max:5120',
            'article_title' => 'nullable|string|max:255', 'article_paragraph_one' => 'nullable|string', 'article_paragraph_two' => 'nullable|string',
            'client' => 'nullable|string|max:255', 'seatpad' => 'nullable|string|max:255', 'location' => 'nullable|string|max:255', 'shipping' => 'nullable|string|max:255', 'category' => 'nullable|string|max:255',
            'previous_label' => 'nullable|string|max:255', 'previous_title' => 'nullable|string|max:255', 'previous_url' => 'nullable|string|max:255', 'next_label' => 'nullable|string|max:255', 'next_title' => 'nullable|string|max:255', 'next_url' => 'nullable|string|max:255', 'related_category' => 'nullable|string|max:255', 'status' => 'nullable|boolean',
        ]);
    }
}