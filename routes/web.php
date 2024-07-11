<?php
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/users/{nama}/{umur}', [InfoController::class, 'umur']);

// Route::get('/salam/{username}', [InfoController::class, 'salam']);

// //Route::get('/info/{nama}/berumur/{umur}', [InfoController::class, 'index']);
// Route::get('/info/{username}/{password}', [InfoController::class, 'index']);

Route::get('/', [ProjectController::class, 'home'])->name('home');
Route::get('/about', [ProjectController::class, 'about'])->name('about');
Route::get('/project', [ProjectController::class, 'index'])->name('project_index');
