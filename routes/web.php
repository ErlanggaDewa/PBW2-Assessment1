<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::middleware(['auth'])->group(function () {
  Route::get('/', function () {
    return view('dashboard');
  })->name('dashboard');

  Route::get('/student/export-pdf', [StudentController::class, 'exportPDF'])->name('student.exportPDF');

  Route::resource('student', StudentController::class);

  Route::get('/book', function () {
    return view('book');
  })->name('book.index');


  Route::fallback(function () {
    return view('dashboard');
  });
});




require __DIR__ . '/auth.php';
