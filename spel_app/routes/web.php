<?php
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');

Route::get('/categories/{category}', [CategoryController::class, 'show'])
    ->name('categories.show');

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');

Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('products.show');

Route::get('/reviews', [ReviewController::class, 'index'])
    ->name('reviews.index');

    Route::get('/reviews/create', [ReviewController::class, 'create'])
    ->name('reviews.create');

    Route::post('/reviews', [ReviewController::class, 'store'])
    ->name('reviews.store');

    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])
    ->name('reviews.destroy');

    Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])
    ->name('reviews.edit');

    Route::put('/reviews/{review}', [ReviewController::class, 'update'])
    ->name('reviews.update');