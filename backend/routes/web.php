<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BlogPostController;
use App\Http\Controllers\PricingPlanController;
use App\Http\Controllers\ShopProductController;
use App\Http\Controllers\PortfolioProjectController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PromoGridController;
use App\Http\Controllers\TopCollectionController;
use App\Http\Controllers\FeaturedOfferController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', fn () => redirect()->route('admin.about-me.index'))->name('dashboard');
    Route::get('/dashboard', fn () => redirect()->route('admin.about-me.index'));
    Route::resource('home', HomeController::class)->except(['show']);
    Route::resource('features', FeatureController::class)->except(['show']);
    Route::resource('promo-grid', PromoGridController::class)->except(['show']);
    Route::resource('top-collection', TopCollectionController::class)->except(['show']);
    Route::resource('featured-offers', FeaturedOfferController::class)->except(['show']);
    Route::resource('about-me', AboutMeController::class)
        ->except(['show'])
        ->parameters(['about-me' => 'aboutMeContent']);
    Route::resource('about-us', AboutUsController::class)
        ->except(['show'])
        ->parameters(['about-us' => 'aboutUsContent']);
    Route::resource('blog', BlogPostController::class)->except(['show']);
    Route::resource('pricing', PricingPlanController::class)->except(['show']);
    Route::resource('shop', ShopProductController::class)->except(['show']);
    Route::resource('portfolio', PortfolioProjectController::class)->except(['show']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
