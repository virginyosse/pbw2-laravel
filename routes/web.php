<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\collectionController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('user', [UserController::class, 'index'])->name('user');
        Route::get('userRegistration', [UserController::class, 'create'])->name('userRegistration');
        Route::post('userStore',[UserController::class,'store'])->name('userStore');
        Route::get('userView',[UserController::class,'show'])->name('userView');
        Route::get('userView/{user}',[UserController::class,'show'])->name('userView/{user}');

        //routing collection
        Route::get('koleksi',[collectionController::class,'index'])->name('koleksi');
        Route::get('koleksiTambah',[collectionController::class,'create'])->name('koleksiTambah');
        Route::post('koleksiStore',[collectionController::class,'store'])->name('koleksiStore');
        Route::get('koleksiView',[collectionController::class,'store'])->name('koleksiView');
        Route::get('koleksiView/{collection}',[collectionController::class,'show'])->name('koleksiView{collection}');
        Route::get('getAllCollection',[collectionController::class,'getAllCollection'])->name('getAllCollections');
    });
});
require __DIR__.'/auth.php';
