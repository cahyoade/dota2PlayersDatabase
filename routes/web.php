<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AddController;
use App\Http\Controllers\RestoreController;
use App\Http\Controllers\EditController;

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
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/players', [DashboardController::class, 'players'])->name('players');
    Route::get('/deleteCountry/{id}', [DashboardController::class, 'deleteCountry'])->name('deleteCountry');
    Route::get('/deletePlayer/{id}', [DashboardController::class, 'deletePlayer'])->name('deletePlayer');
    Route::get('/deleteTeam/{id}', [DashboardController::class, 'deleteTeam'])->name('deleteTeam');

    //add
    Route::get('/add', [AddController::class, 'index'])->name('add');
    Route::post('/storePlayer', [AddController::class, 'storePlayer'])->name('storePlayer');
    Route::post('/storeTeam', [AddController::class, 'storeTeam'])->name('storeTeam');
    Route::post('/storeCountry', [AddController::class, 'storeCountry'])->name('storeCountry');

    //edit
    Route::get('/editPlayer/{id}', [editController::class, 'player'])->name('editPlayer');
    Route::get('/editTeam/{id}', [editController::class, 'team'])->name('editTeam');
    Route::get('/editCountry/{id}', [editController::class, 'country'])->name('editCountry');
    Route::post('/updatePlayer/{id}', [EditController::class, 'updatePlayer'])->name('updatePlayer');
    Route::post('/updateTeam/{id}', [EditController::class, 'updateTeam'])->name('updateTeam');
    Route::post('/updateCountry/{id}', [EditController::class, 'updateCountry'])->name('updateCountry');

    //restore
    Route::get('/restore', [RestoreController::class, 'index'])->name('restore');
    Route::get('/restoreCountry/{id}', [RestoreController::class, 'restoreCountry'])->name('restoreCountry');
    Route::get('/restorePlayer/{id}', [RestoreController::class, 'restorePlayer'])->name('restorePlayer');
    Route::get('/restoreTeam/{id}', [RestoreController::class, 'restoreTeam'])->name('restoreTeam');
    Route::get('/deletePermanentCountry/{id}', [RestoreController::class, 'deletePermanentCountry'])->name('deletePermanentCountry');
    Route::get('/deletePermanentPlayer/{id}', [RestoreController::class, 'deletePermanentPlayer'])->name('deletePermanentPlayer');
    Route::get('/deletePermanentTeam/{id}', [RestoreController::class, 'deletePermanentTeam'])->name('deletePermanentTeam');
});
