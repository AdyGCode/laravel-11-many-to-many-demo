<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


// Add a route that can load an image from storage based on a parameter
Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');


Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);


Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
