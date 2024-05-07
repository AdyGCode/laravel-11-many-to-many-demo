<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudentController;

use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\ImageController;

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;


// Add a route that can load an image from storage based on a parameter
Route::get('/images/{imageName}', [ImageController::class, 'show'])->name('image.show');

Route::get('/1-to-1', [StaticPagesController::class, 'oneToOne'])->name('pages.one-to-one');
Route::get('/1-to-many', [StaticPagesController::class, 'oneToMany'])->name('pages.one-to-many');
Route::get('/many-to-many', [StaticPagesController::class, 'manyToMany'])->name('pages.many-to-many');

Route::resource('courses', CourseController::class);
Route::resource('students', StudentController::class);

Route::resource('customers', CustomerController::class);

Route::resource('departments', DepartmentController::class);
Route::resource('employees', EmployeeController::class);


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
