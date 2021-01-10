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

Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider')->name('social_auth');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');




Route::group(['prefix' => 'servicios'], function () {
    Route::get('/communes', 'ServiceController@getCommunes');
    Route::get('/{slug}/detalle', 'ServiceController@show')->name('services.show');
    Route::get('/crear', 'ServiceController@create')->name('services.create');
    Route::post('/store', 'ServiceController@store')->name('services.store');
    Route::put('/{service}/update', 'ServiceController@update')->name('services.update');
    Route::get('/{slug}/editar', 'ServiceController@edit')->name('services.edit');
    Route::delete('{service}/destroy', 'ServiceController@destroy')->name('services.destroy');
});

//  filtrado por categorias

Route::group(['prefix' => 'categorias'], function () {

    Route::get('/{category}', 'CategoriesController@filter')->name('categories.filter');
});

//  vendedores
Route::group(['prefix' => 'seller'], function () {
    Route::get('/services', 'SellerController@services')->name('seller.services');
    Route::get('/analytics', 'SellerController@analytics')->name('sellers.analytics');
    Route::get('/chats', 'SellerController@chats')->name('sellers.chats');
    Route::get('/contacts', 'SellerController@contacts')->name('sellers.contacts');
    Route::get('/wishlist', 'SellerController@wishlist')->name('sellers.wishlist');
    Route::get('/profile/{seller}', 'SellerController@profile')->name('seller.profile');
    Route::post('/services/{slug}', 'SellerController@show')->name('seller.show');

});

//  Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/servicios', 'AdminController@services')->name('admin.services');
    Route::get('/services_json', 'AdminController@servicesJson')->name('admin.services_json');
    Route::post('/services/updateStatus', 'AdminController@updateServiceStatus');
});


//  construimos nuestra ruta para acceder a las imagenes
Route::get('/images/{path}/{attachment}', function ($path, $attachment) {

    $file = sprintf('storage/%s/%s', $path, $attachment);

    //  evaluamos si la imagen existe
    if ( File::exists( $file ) ) {
        return Image::make($file)->response();
    }
});