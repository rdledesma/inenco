<?php
use App\Integrant;
use App\Publication;
use App\Ad;
use App\Resource;
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
    $ad = Ad::first()->content;
    return view('welcome', compact('ad'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('integrant', 'IntegrantController');
Route::resource('publication', 'PublicationController');
Route::resource('message', 'MessageController');
Route::resource('resource', 'ResourceController');
Route::get('/publicacion/{name}', 'PublicationController@ver')->name('publication.ver');


Route::get('/contacto', function () {
    return view('contact');
})->name('contact');



Route::get('/integrantes', function () {
    $integrants = Integrant::where('state','active')->orderBy('name')->get();
    return view('about', compact('integrants'));
})->name('integrantes');




Route::get('/recursos', function ()
{

    $resources = Resource::where('state','active')->orderBy('name')->get();
    return view('recursos', compact('resources'));
})->name('recursos');

Route::post('recursos', 'ResourceController@search')->name('recursos.search');
