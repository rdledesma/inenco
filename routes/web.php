<?php
use App\Integrant;
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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('integrant', 'IntegrantController');
Route::resource('publication', 'PublicationController');


Route::get('/publicacion/{name}', 'PublicationController@show')->name('publication.show');


Route::get('/integrantes', function () {
    $integrants = Integrant::where('state','active')->orderBy('name')->get();
    return view('about', compact('integrants'));
})->name('integrantes');

