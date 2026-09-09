<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\PortfolioProjectController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/contact', [ContactController::class, 'store']);
Route::get('/about-me', [AboutMeController::class, 'apiIndex']);
Route::get('/about-us', [AboutUsController::class, 'apiIndex']);
Route::get('/blog', [BlogPostController::class, 'apiIndex']);

Route::get('/blog/{id}', [BlogPostController::class, 'apiShow']);
Route::get('/pricing', [PricingPlanController::class, 'apiIndex']);
Route::get('/shop', [ShopProductController::class, 'apiIndex']);
Route::get('/portfolio', [PortfolioProjectController::class, 'apiIndex']);