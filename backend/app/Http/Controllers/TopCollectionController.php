<?php

namespace App\Http\Controllers;

use App\Models\TopCollection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TopCollectionController extends Controller
{
    private array $imageFields = ['top_left_image', 'top_right_image', 'bottom_left_image', 'bottom_right_image'];

    public function index()
    {
        $topCollections = TopCollection::latest()->get();
        return view('admin.top-collection.all-top-collection', compact('topCollections'));
    }

    public function create()
    {
        return view('admin.top-collection.add-top-collection');
    }

    public function apiIndex()
    {
        return response()->json(TopCollection::where('status', true)->latest()->first());
    }

    public function store(Request $request)
    {
        $validated = $this->validateCollection($request, true);
        foreach ($this->imageFields as $field) {
            $validated[$field] = $request->file($field)->store('top-collection', 'public');
        }
        $validated['status'] = true;
        TopCollection::create($validated);
        return redirect()->route('admin.top-collection.index')->with('success', 'Top Collection added successfully!');
    }

    public function edit(TopCollection $topCollection)
    {
        return view('admin.top-collection.edit-top-collection', compact('topCollection'));
    }

    public function update(Request $request, TopCollection $topCollection)
    {
        $validated = $this->validateCollection($request, false);
        foreach ($this->imageFields as $field) {
            if ($request->hasFile($field)) {
                if (!str_starts_with($topCollection->{$field}, 'http')) {
                    Storage::disk('public')->delete($topCollection->{$field});
                }
                $validated[$field] = $request->file($field)->store('top-collection', 'public');
            }
        }
        $topCollection->update($validated);
        return redirect()->route('admin.top-collection.index')->with('success', 'Top Collection updated successfully!');
    }

    public function destroy(TopCollection $topCollection)
    {
        foreach ($this->imageFields as $field) {
            if (!str_starts_with($topCollection->{$field}, 'http')) {
                Storage::disk('public')->delete($topCollection->{$field});
            }
        }
        $topCollection->delete();
        return redirect()->route('admin.top-collection.index')->with('success', 'Top Collection deleted successfully!');
    }

    private function validateCollection(Request $request, bool $required): array
    {
        $imageRule = ($required ? 'required|' : 'nullable|') . 'file|max:5120';
        return $request->validate([
            'top_left_image' => $imageRule, 'top_right_image' => $imageRule,
            'bottom_left_image' => $imageRule, 'bottom_right_image' => $imageRule,
            'badge' => 'nullable|string|max:255', 'heading' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255', 'button_link' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}
