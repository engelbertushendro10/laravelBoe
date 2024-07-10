<?php
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return "ini halaman about";
// });
Route::get('/salam/{username}', [InfoController::class, 'salam']);

//Route::get('/info/{nama}/berumur/{umur}', [InfoController::class, 'index']);
Route::get('/info/{username}/{password}', [InfoController::class, 'index']);

Route::get('/info', function () {
    return view('info');
});
