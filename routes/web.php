<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ImageController;

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


/**********************************************************************
 * Image Rendering Route
 *
 * Add a route that can load an image from storage based on a parameter
 **********************************************************************/
Route::get('/images/{imageName}', [ImageController::class, 'show'])
    ->name('image.show');

/**********************************************************************
 * Static Page Routes
 *
 * / and /welcome both call the welcome method.
 * move welcome.blade.php into the pages folder
 **********************************************************************/
Route::get('/', [StaticPagesController::class, 'welcome'])
    ->name('home');
Route::get('/welcome', [StaticPagesController::class, 'welcome'])
    ->name('welcome');
Route::get('/1-to-1', [StaticPagesController::class, 'oneToOne'])
    ->name('pages.one-to-one');
Route::get('/1-to-many', [StaticPagesController::class, 'oneToMany'])
    ->name('pages.one-to-many');
Route::get('/many-to-many', [StaticPagesController::class, 'manyToMany'])
    ->name('pages.many-to-many');

/**********************************************************************
 * Resourceful Routes
 **********************************************************************/
Route::resource('courses', CourseController::class);
Route::resource('customers', CustomerController::class);
Route::resource('departments', DepartmentController::class);
Route::resource('employees', EmployeeController::class);

/**
 * Non-Resourceful routing requires EVERY route to be declared:
 *        HTTP VERB  URI               Controller class         method to call        route alias route('name of route')
 * Route::get(       '/orders',       [OrderController::class, 'index'])              ->name('orders.index');
 * Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');
 * Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
 * Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
 * Route::put('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
 * OR Route::patch('/orders/{order}', [OrderController::class, 'update'])->name('orders.update');
 * Route::delete('/orders/{order}', [OrderController::class, 'destroy'])->name('orders.delete');
 * Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');
 */

Route::resource('orders', OrderController::class);

Route::resource('students', StudentController::class);

/**********************************************************************
 * Protected Routes - Authenticated & Verified
 **********************************************************************/
Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/**********************************************************************
 * Protected Routes - Authenticated
 **********************************************************************/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';
