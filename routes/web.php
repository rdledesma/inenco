<?php
use App\Integrant;
use App\Publication;
use App\Ad;
use App\Resource;
use App\Proyect;
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
Route::resource('project', 'ProyectController');



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


Route::view('investigacion', 'investigation.index')->name('investigation.index');
Route::get('/proyectos', function (){

    $activeProjects = Proyect::where('state','active')->orderBy('name')->get();
    $executedProjects = Proyect::where('state','executed')->orderBy('name')->get();
    return view('investigation.projects', compact(['activeProjects','executedProjects']));
})->name('proyectos');
