<?php

use App\Http\Controllers\AwnserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SubjectController;

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

Route::get('/', function () {
    return redirect('login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('subjects', SubjectController::class);

    Route::resource('questions', QuestionController::class);

    //descomenta aqui seu corno
    //Route::resource('answers', AwnserController::class);

    Route::prefix('answers')->group(function () {
        Route::get('/', function () {
            return view('answer-index');
        })->name('answer.index');

        Route::get('/create', function () {
            return view('answer-create');
        })->name('answer.create');
    });

});

require __DIR__.'/auth.php';
