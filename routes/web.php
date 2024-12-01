<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    // Dashboard Routes
    Route::get('/reports', [ReportController::class, 'index'])->name('reports.index');
    
    // Orders Routes
    Route::get('/orders/today', [OrderController::class, 'today'])->name('orders.today');
    Route::get('/orders/pending', [OrderController::class, 'pending'])->name('orders.pending');
    Route::get('/orders/completed', [OrderController::class, 'completed'])->name('orders.completed');
    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
    Route::patch('/orders/{order}/complete', [OrderController::class, 'markAsCompleted'])->name('orders.complete');
    
    // Products Routes
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/{product}/update', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    
    // Other Routes
    Route::resource('calendar', CalendarController::class);
    Route::resource('deals', DealController::class);
    Route::resource('reviews', ReviewController::class);
    Route::resource('order-requests', OrderRequestController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/completed-orders', [CompletedOrderController::class, 'index'])->name('completed-orders.index');
    Route::get('/completed-orders/{order}', [CompletedOrderController::class, 'show'])->name('completed-orders.show');
});

Route::resource('discounts', DiscountController::class)
    ->except(['create', 'edit', 'show']);

    
require __DIR__.'/auth.php';
