<?php

use App\Http\Controllers\ReservaController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\UserControlleur;


use App\Http\Controllers\ReservationController;
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
    return view('frontend/index');
 });

Route::get('/map', function () {
    return view('carte');
 });
Route::get('/wel', function () {
    return view('welcome');
});
Route::get('/',[SiteController::class,'index'])->name('index');
Route::get('contact',[SiteController::class,'index2']);
// Route::middleware('[auth]', 'role:admin')->group(function () {});
Route::get('/register',[UserControlleur::class,'form_register'])->name('user.register');
Route::post('register', [UserControlleur::class, 'enregistrement'])->name('register');

Route::get('/login',[UserControlleur::class,'afficheLogin']);
Route::get('/login',[UserControlleur::class,'afficheLogin']);
Route::post('/loginTest',[UserControlleur::class,'authentification'])->name('login.test');

Route::get('/reservation', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/deconnection', [UserControlleur::class, 'logout'])->name('deconection');
Route::post('/deconnection', [UserControlleur::class, 'logout']);
Route::get('/ajoutSite', [SiteController::class, 'ajoutSite']);
 Route::post('/ajoutSite', [SiteController::class, 'ajout'])->name('ajoutSite');

Route::get('/dashbord', [UserControlleur::class, 'admin'])->name('dashbord');
Route::get('/liste', [UserControlleur::class, 'liste'])->name('liste');
Route::get('/valider/{ig}', [UserControlleur::class, 'validerReserv']);







