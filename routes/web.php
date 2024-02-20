<?php


use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminReservationController;
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


require __DIR__.'/auth.php';

Route::get('/', [MainController::class, 'accueil'])->name('main.accueil');

Route::get('/menu', [MainController::class, 'menu'])->name('main.menu');

Route::get('/plat/{id}', [MainController::class, 'plat'])->name('main.plat');

Route::get('/reservation', [MainController::class, 'reservation'])->name('main.reservation');
Route::post('/reservation', [MainController::class, 'reservationStore'])->name('main.reservation.store');

Route::get('/about', [MainController::class, 'about'])->name('main.about');

Route::get('/contact', [MainController::class, 'contact'])->name('main.contact');

Route::get('/admin/reservation/index', [AdminReservationController::class, 'index'])
->middleware('auth')->name('admin.reservation.index');

Route::get('/admin/reservation/create', [AdminReservationController::class, 'create'])
->middleware('auth')->middleware('auth')->name('admin.reservation.create');

Route::get('/admin/reservation/show/{id}', [AdminReservationController::class, 'show'])
->middleware('auth')->name('admin.reservation.show');

Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])
->middleware('auth')->name('admin.reservation.edit');

Route::delete('/admin/reservation/delete/{id}', [AdminReservationController::class, 'delete'])
->middleware('auth')->name('admin.reservation.delete');

Route::put('/admin/reservation/{id}', [AdminReservationController::class, 'update'])
->middleware('auth')->name('admin.reservation.update');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});