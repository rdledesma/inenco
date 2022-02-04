<?php
use App\Integrant;
use App\Publication;
use App\Cover;
use App\Resource;
use App\Proyect;
use App\Article;
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
    $ad = Cover::where('pagina', 'INICIO')->first();
    return view('welcome', compact('ad'));
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/publicacion/{name}', 'PublicationController@ver')->name('publication.ver');


Route::get('/contacto', function () {
    return view('contact');
})->name('contact');



Route::get('/integrantes', function () {

    $integrants = Integrant::with(array('user' => function($query)
    {
        $query->where('state', 'active');
    }))
        ->get()->sortByDesc('user.name');
    return view('about', compact('integrants'));
})->name('integrantes');




Route::get('/recursos', function ()
{

    $resources = Resource::where('state','active')->orderBy('name')->get();
    return view('recursos', compact('resources'));
})->name('recursos');

Route::post('recursos', 'ResourceController@search')->name('recursos.search');


Route::get('investigacion', function (){
    $cover = Cover::where('pagina','INVESTIGACION')->first();
    return view('investigation.index', compact('cover'));
})->name('investigation.index');



Route::get('/proyectos', function (){

    $activeProjects = Proyect::where('state','active')->orderBy('name')->get();
    $executedProjects = Proyect::where('state','executed')->orderBy('name')->get();
    return view('investigation.projects', compact(['activeProjects','executedProjects']));
})->name('proyectos');

Route::get('/articulos', function (){

    $articles = Article::where('state','active')->with('files')->get();
    return view('investigation.articles', compact('articles'));
})->name('articulos');


Route::get('/articleFile/{id}', 'ArticleFileController@show')->name('article.file');
Route::get('/cv/{id}', 'IntegrantController@getCV')->name('integrant.file');


Route::middleware(['auth'])->group(function () {
    Route::resource('integrant', 'IntegrantController');
    Route::resource('publication', 'PublicationController');
    Route::resource('message', 'MessageController');
    Route::resource('resource', 'ResourceController');
    Route::resource('project', 'ProyectController');
    Route::resource('article', 'ArticleController');
    Route::resource('cover', 'CoverController');
});
