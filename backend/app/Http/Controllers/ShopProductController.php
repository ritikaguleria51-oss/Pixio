<?php

namespace App\Http\Controllers;

use App\Models\ShopProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShopProductController extends Controller
{
    public function index()
    {
        $products = ShopProduct::latest()->get();
        return view('admin.shop.all-shop', compact('products'));
    }

    public function create()
    {
        return view('admin.shop.add-shop');
    }

    public function apiIndex(Request $request)
    {
        $category = $request->query('category');
        $activeProducts = ShopProduct::where('status', true)->orderBy('id')->get();
        $products = $activeProducts
            ->when($category, fn ($collection) => $collection->where('category', $category))
            ->values();
        $first = $activeProducts->first();
        $categories = collect(explode('|', $first?->category_names ?? ''))->values();
        $counts = collect(explode('|', $first?->category_counts ?? ''))->values();

        return response()->json([
            'hero_title' => $first?->hero_title,
            'hero_image' => $first?->hero_image,
            'colors' => $this->list($first?->colors),
            'sizes' => $this->list($first?->sizes),
            'tags' => $this->list($first?->tags),
            'categories' => $categories->filter()->values()->map(fn ($name, $index) => ['name' => $name, 'count' => $counts->get($index, '0')])->values(),
            'products' => $products->values(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);
        foreach (['hero_image', 'image'] as $field) {
            if ($request->hasFile($field)) $validated[$field] = $request->file($field)->store('shop', 'public');
        }
        $validated['status'] = $request->boolean('status', true);
        ShopProduct::create($validated);
        return redirect()->route('admin.shop.index')->with('success', 'Shop product added successfully!');
    }

    public function edit(ShopProduct $shop)
    {
        return view('admin.shop.edit-shop', ['product' => $shop]);
    }

    public function update(Request $request, ShopProduct $shop)
    {
        $validated = $this->validateProduct($request);
        foreach (['hero_image', 'image'] as $field) {
            if ($request->hasFile($field)) {
                if ($shop->{$field}) Storage::disk('public')->delete($shop->{$field});
                $validated[$field] = $request->file($field)->store('shop', 'public');
            }
        }
        $validated['status'] = $request->boolean('status');
        $shop->update($validated);
        return redirect()->route('admin.shop.index')->with('success', 'Shop product updated successfully!');
    }

    public function destroy(ShopProduct $shop)
    {
        foreach (['hero_image', 'image'] as $field) if ($shop->{$field}) Storage::disk('public')->delete($shop->{$field});
        $shop->delete();
        return redirect()->route('admin.shop.index')->with('success', 'Shop product deleted successfully!');
    }

    private function list(?string $value): array
    {
        return collect(explode('|', $value ?? ''))->filter()->values()->all();
    }

    private function validateProduct(Request $request): array
    {
        return $request->validate([
            'hero_title' => 'nullable|string|max:255', 'hero_image' => 'nullable|file|max:5120',
            'category_names' => 'nullable|string|max:1000', 'category_counts' => 'nullable|string|max:1000',
            'colors' => 'nullable|string|max:1000', 'sizes' => 'nullable|string|max:500', 'tags' => 'nullable|string|max:1000',
            'name' => 'required|string|max:255', 'category' => 'nullable|string|max:255', 'image' => 'nullable|file|max:5120',
            'price' => 'nullable|string|max:50', 'sale_label' => 'nullable|string|max:255', 'status' => 'nullable|boolean',
        ]);
    }
}