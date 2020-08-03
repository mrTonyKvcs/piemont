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
Route::group(
[
    'prefix' => LaravelLocalization::setLocale(), 
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() 
{
    Route::get('index.htm', function () {
        return redirect()->route('pages.index');
    });


    Route::get('/', 'PagesController@index')->name('pages.index');
    Route::get('/dokumentumok', 'PagesController@documents')->name('pages.documents')->middleware('auth');
});

Route::group(['prefix' => 'admin', 'middleware' => 'is_admin'], function () 
{
    Route::get('/dashboard', 'HomeController@index')->name('home');

    Route::post('uj-ugyfel-letrehozasa', 'HomeController@createClient')->name('admin.create-client');

    Route::post('uj-dokumentum-csoport-letrehozasa', 'HomeController@createDocumentGroup')->name('admin.create-document-group');

    Route::post('uj-dokumentum-feltoltese', 'HomeController@uploadDocument')->name('admin.upload-document');
});

Auth::routes(['register' => false]);
