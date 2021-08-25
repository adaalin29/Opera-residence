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

Route::get('/', 'IndexController@index');
Route::get('galerie', 'IndexController@galerie');
Route::get('contact', 'ContactController@index');
Route::get('facilitati', 'IndexController@facilitati');
Route::get('termeni', 'IndexController@termeni');
Route::get('confidentialitate', 'IndexController@confidentialitate');
Route::get('cookies', 'IndexController@cookies');
Route::get('despre', 'IndexController@despre');
Route::get('tipuri', 'IndexController@tipuri');

Route::get('/apartament/{url_slug}','IndexController@apartament');

Route::post('send-message','ContactController@send_message');
Route::post('send-rezervare','ContactController@send_rezervare');
Route::post('send-apartament','ContactController@send_apartament');

Route::get('/storage/thumb/{query}/{file?}', 'ThumbController@index')
    ->where([
        'query' => '[A-Za-z0-9\:\;\-]+',
        'file'  => '[A-Za-z0-9\/\.\-\_]+',
    ])
    ->name('thumb');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
