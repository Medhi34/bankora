<?php

declare(strict_types=1);

use App\Http\Controllers\Incident\CreateController;
use App\Http\Controllers\Incident\IndexController;
use App\Http\Controllers\Incident\SearchController;
use App\Http\Controllers\Incident\StoreController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('incidents')
        ->as('incidents.')
        ->group(static function (): void {
            Route::get('/create', CreateController::class)->name('create');
            Route::post('/', StoreController::class)->name('store');
            Route::get('/index', IndexController::class)->name('index');
            Route::get('/search', SearchController::class)->name('search');
        });
});

require __DIR__.'/auth.php';
