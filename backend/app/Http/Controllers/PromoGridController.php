<?php

namespace App\Http\Controllers;

use App\Models\PromoGrid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PromoGridController extends Controller
{
    private array $imageFields = ['large_image', 'small_one_image', 'small_two_image'];

    public function index()
    {
        $promoGrids = PromoGrid::latest()->get();
        return view('admin.promo-grid.all-promo-grid', compact('promoGrids'));
    }

    public function create()
    {
        return view('admin.promo-grid.add-promo-grid');
    }

    public function apiIndex()
    {
        return response()->json(PromoGrid::where('status', true)->latest()->first());
    }

    public function store(Request $request)
    {
        $validated = $this->validatePromoGrid($request, true);
        foreach ($this->imageFields as $field) {
            $validated[$field] = $request->file($field)->store('promo-grid', 'public');
        }
        $validated['status'] = true;
        PromoGrid::create($validated);
        return redirect()->route('admin.promo-grid.index')->with('success', 'Promo Grid added successfully!');
    }

    public function edit(PromoGrid $promoGrid)
    {
        return view('admin.promo-grid.edit-promo-grid', compact('promoGrid'));
    }

    public function update(Request $request, PromoGrid $promoGrid)
    {
        $validated = $this->validatePromoGrid($request, false);
        foreach ($this->imageFields as $field) {
            if ($request->hasFile($field)) {
                if (!str_starts_with($promoGrid->{$field}, 'http')) {
                    Storage::disk('public')->delete($promoGrid->{$field});
                }
                $validated[$field] = $request->file($field)->store('promo-grid', 'public');
            }
        }
        $promoGrid->update($validated);
        return redirect()->route('admin.promo-grid.index')->with('success', 'Promo Grid updated successfully!');
    }

    public function destroy(PromoGrid $promoGrid)
    {
        foreach ($this->imageFields as $field) {
            if (!str_starts_with($promoGrid->{$field}, 'http')) {
                Storage::disk('public')->delete($promoGrid->{$field});
            }
        }
        $promoGrid->delete();
        return redirect()->route('admin.promo-grid.index')->with('success', 'Promo Grid deleted successfully!');
    }

    private function validatePromoGrid(Request $request, bool $required): array
    {
        $imageRule = ($required ? 'required|' : 'nullable|') . 'file|max:5120';
        return $request->validate([
            'large_image' => $imageRule,
            'small_one_image' => $imageRule,
            'small_two_image' => $imageRule,
            'large_label' => 'nullable|string|max:255', 'large_link' => 'nullable|string|max:255',
            'heading' => 'nullable|string|max:255', 'description' => 'nullable|string', 'heading_link' => 'nullable|string|max:255',
            'small_one_label' => 'nullable|string|max:255', 'small_one_link' => 'nullable|string|max:255',
            'small_two_label' => 'nullable|string|max:255', 'small_two_link' => 'nullable|string|max:255',
            'sale_percent' => 'nullable|string|max:255', 'sale_text' => 'nullable|string|max:255',
            'status' => 'nullable|boolean',
        ]);
    }
}
