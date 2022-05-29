<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\VehiculeController;


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

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
        

    });

    Route::middleware(['auth','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.user.home')->name('home'); 
        Route::post('/logout',[UserController::class,'logout'])->name('logout');

    });
});

Route::prefix('admin')->name('admin.')->group(function(){

    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
        Route::view('/login','dashboard.admin.login')->name('login');
        Route::post('/check',[AdminController::class,'check'])->name('check');

    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');

       //CLIENTS
        Route::get('/Listes_des_clients',[AdminController::class,'list_clients'])->name('Listes_des_clients');     
        Route::view('/Nouveau_client','dashboard.admin.Nouveau_client')->name('Nouveau_client');

        Route::get('supprimer_client/{id}',[AdminController::class,'supprimer_client'])->name('supprimer_client');
        Route::get('modifier_client/{id}',[AdminController::class,'modifier_client'])->name('modifier_client');
        Route::post('editer_client',[AdminController::class,'editer_client'])->name('editer_client');

        // Route::view('/Liste_vehicules','dashboard.admin.liste_vehicules')->name('liste_vehicules');
        // Route::view('/Nouveau_vehicules','dashboard.admin.Nouveau_vehicules')->name('Nouveau_vehicules');

        //VEHICULES 
        Route::get('/Liste_vehicules',[AdminController::class,'Liste_vehicules'])->name('Liste_vehicules');

        Route::view('/Nouveau_vehicules','dashboard.admin.Nouveau_vehicules')->name('Nouveau_vehicules');
        Route::post('create_vehicule',[AdminController::class,'create_vehicule'])->name('create_vehicule');


        Route::get('modifier_vehicule/{id}',[AdminController::class,'modifier_vehicule'])->name('modifier_vehicule');

        Route::post('editer_vehicule',[AdminController::class,'editer_vehicule'])->name('editer_vehicule');
        Route::get('supprimer_vehicule/{id}',[AdminController::class,'supprimer_vehicule'])->name('supprimer_vehicule');


      



    });
    Route::view('/profile','dashboard.admin.profile')->name('profile');
  
 
    // Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');


    
    


});
