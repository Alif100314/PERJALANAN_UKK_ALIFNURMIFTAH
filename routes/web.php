<?php
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


//Login dan Registrasi
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/signup', 'AuthController@register');
Route::post('/postregister', 'AuthController@postregister');

Route::group(['middleware' => ['auth','cekrole:user']], function () {
     //Perjalanan
     Route::get('/perjalanan','PerjalananController@index')->name('perjalanan');
     Route::get('/perjalanan/create', 'PerjalananController@create');
     Route::post('/perjalanan/store', 'PerjalananController@store');
     Route::get('/perjalanan/edit/{id}', 'PerjalananController@edit');
     Route::put('/perjalanan/update/{id}', 'PerjalananController@update');
     Route::get('/perjalanan/destroy/{id}', 'PerjalananController@destroy');
     Route::get('/perjalanan/show/{id}', 'PerjalananController@show');
});

Route::group(['middleware' => ['auth','cekrole:admin']], function () {
    //ADMIN
   
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', function () {
        return view('home');
    })->name('home');


    //Profil
    Route::get('/datauser','ProfilController@index');
    Route::get('/datauser/pdf','ProfilController@pdf');
    Route::get('/profil','ProfilController@Profil');
    Route::post('/profile', 'ProfilController@update');

});








