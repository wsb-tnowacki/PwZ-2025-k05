<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OgolneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Route::get('/', function () {
    return view('ogolne.welcome');
}); */
/* Route::get('/kontakt', function () {
    return view('ogolne.kontakt');
})->name('kontakt');

Route::get('/onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('ogolne.onas', ['zadania' => $zadania]);
}); */

/* Route::get('/',[OgolneController::class, 'start'])->name('start');
Route::get('/kontakt',[OgolneController::class, 'kontakt'])->name('kontakt');
Route::get('/onas',[OgolneController::class, 'onas'])->name('onas'); */

Route::controller(OgolneController::class)->group(function() {
    Route::get('/','start')->name('start');
    Route::get('/kontakt','kontakt')->name('kontakt');
    Route::get('/onas','onas')->name('onas')->middleware('auth');
});
Route::get('/dashboard', function () {
    //return view('dashboard');
    return redirect()->route('start');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('post',PostController::class);
