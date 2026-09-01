<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class MenuItemController extends Controller
{
    public function index()
    {
        $menus = MenuItem::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return response()->json($menus);
    }
}