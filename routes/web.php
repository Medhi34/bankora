<?php

declare(strict_types=1);

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncidentController;
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


// Route::get('/incidents/create', IncidentController::class, function () {
//     return view('incidents.create');
// })->middleware(['auth', 'verified'])->name('incidents.create');
// Route::get('/incidents/index', IncidentController::class, function () {
//     return view('incidents.index');
// })->middleware(['auth', 'verified'])->name('incidents.index');
// Route::get('/incidents/search', IncidentController::class, function () {
//     return view('incidents.search');
// })->middleware(['auth', 'verified'])->name('incidents.search');
// Route::get('/incidents/update', IncidentController::class, function () {
//     return view('incidents.update');
// })->middleware(['auth', 'verified'])->name('incidents.update');
// Route::get('/incidents/show', IncidentController::class, function () {
//     return view('incidents.show');
// })->middleware(['auth', 'verified'])->name('incidents.show');
// Route::resource('incidents', IncidentController::class)->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::prefix('incidents')
        ->group(static function(): void {
            Route::get('/create', [IncidentController::class, 'create'])->name('incidents.create');
            Route::get('/', [IncidentController::class, 'store'])->name('incidents.store');
            Route::get('/index', [IncidentController::class, 'index'])->name('incidents.index');
            Route::get('/show', [IncidentController::class, 'show'])->name('incidents.show');
            Route::put('/update', [IncidentController::class, 'update'])->name('incidents.update');
            Route::get('/', [IncidentController::class, 'edit'])->name('incidents.edit');
            Route::get('/search', [IncidentController::class, 'search'])->name('incidents.search');
            Route::delete('/', [IncidentController::class, 'destroy'])->name('incidents.destroy');
        });
    });

require __DIR__.'/auth.php';
