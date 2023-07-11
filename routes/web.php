<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', function () {
    return view('home');
});
Route::get('/home/reading', function () {
    return view('reading');
});
Route::get('/home/planning', function () {
    return view('planning');
});
Route::get('/home/completed', function () {
    return view('completed');
});
Route::get('/home/add', function () {
    return view('add');
});
Route::get('/home/add/library', function () {
    return view('addlib');
});
Route::get('/home/edit', function () {
    return view('edit');
});
Route::get('/home/edit/library', function () {
    return view('editlib');
});
Route::get('/home/libraries', function () {
    return view('netlib');
});
Route::get('/home/settings', function () {
    return view('settings');
});
Route::get('/home/about', function () {
    return view('about');
});

Route::get('/home', [BookController::class, 'indexhome'])->name('home');
Route::get('/home/reading', [BookController::class, 'indexreading']);
Route::get('/home/planning', [BookController::class, 'indexplanning']);
Route::get('/home/completed', [BookController::class, 'indexcompleted']);
Route::get('/home/libraries', [BookController::class, 'indexlibrary'])->name('library');
Route::post('/home/add/store', [BookController::class, 'store'])->name('store.book');
Route::post('/home/add/library/store', [BookController::class, 'storelibrary'])->name('store.library');
Route::get('/home/edit/{book_info}', [BookController::class, 'edit'])->name('edit.book');
Route::get('/home/edit/library/{library_info}', [BookController::class, 'editlibrary'])->name('edit.library');
Route::put('/home/update/{book_info}', [BookController::class, 'update'])->name('update.book');
Route::put('/home/update/library/{library_info}', [BookController::class, 'updatelibrary'])->name('update.library');
Route::delete('/home/delete/{book_info}', [BookController::class, 'delete'])->name('delete.book');
Route::delete('/home/delete/library/{library_info}', [BookController::class, 'deletelibrary'])->name('delete.library');
