<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::get('/Libros', function () {
//     return view('Libros');
// })->name('Libros');
Route::get('/libros', [CrudController::class, 'MostrarLibros'])->name('Libros');
// Route::get('/Libros', [CrudController::class, 'MostrarLibros']);
