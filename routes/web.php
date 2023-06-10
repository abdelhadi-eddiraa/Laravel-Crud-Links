<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitController;
use App\Models\Produit;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('chirps',ChirpController::class)
    ->only(['index','store','edit','update','destroy','create']);


});





























Route::group(['middleware'=> 'auth', 'prefix'=>'dashboard'],function(){
    Route::get('/links',[LinkController::class,'index'])->name('links.index');
    Route::get('/links/new',[LinkController::class,'create'])->name('links.create');
    Route::post('/links/new',[LinkController::class,'store'])->name('links.store');
    Route::get('/links/{link}',[LinkController::class,'edit'])->name('links.show');
    Route::put('/links/{link}',[LinkController::class,'update'])->name('links.update');
    Route::delete('/links/{link}',[LinkController::class,'destroy'])->name('links.delete');



    Route::get('/setting',[UserController::class,'edit'])->name('setting.edit');
    Route::patch('/setting',[UserController::class,'update'])->name('setting.update');

});


Route::post('/visit/{link}',[VisitController::class,'store']);





Route::get('/{user}',[UserController::class,'show'])->name('user.show');
//->middleware('check-year');



Route::group(['middleware'=>'AuthMiddleware','prefix'=>'v1'],function(){
    Route::resource('produit',ProduitController::class);
});


