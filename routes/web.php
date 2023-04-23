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
Route::get('/', ['as' => 'site.home', 'uses' => 'Site\SiteController@index']);

/* agenda */
Route::get('/agenda', ['as' => 'site.schedule', 'uses' => 'Site\ScheduleController@index']);

Route::get('/sobre', ['as' => 'site.about.index', 'uses' => 'Site\AboutController@index']);

/**speaker */
Route::get('/oradores', ['as' => 'site.speaker', 'uses' => 'Site\SpeakerController@index']);
Route::get('/oradores/{name}', ['as' => 'site.speaker.show', 'uses' => 'Site\SpeakerController@show']);

/* faq */
Route::get('/perguntas-frequentes', ['as' => 'site.faq', 'uses' => 'Site\FaqController@index']);

/* gallery */
Route::get('/galerias/', ['as' => 'site.gallery', 'uses' => 'Site\GalleryController@index']);
Route::get('/galeria/{name}', ['as' => 'site.gallery.show', 'uses' => 'Site\GalleryController@show']);
/* Galeria de Videos */
Route::get('/videos/', ['as' => 'site.videos', 'uses' => 'Site\VideoController@index']);
Route::get('/video/{id}', ['as' => 'site.video.show', 'uses' => 'Site\VideoController@show']);

/* noticias */
Route::get('/noticias', ['as' => 'site.news', 'uses' => 'Site\NewsController@index']);
Route::get('/noticia/{title}', ['as' => 'site.news.show', 'uses' => 'Site\NewsController@show']);
/* contact */
Route::get('/contactos', ['as' => 'site.contact', 'uses' => 'Site\ContactController@index']);
route::post('site/help/email', ['as' => 'site.help.email', 'uses' => 'Site\Email\HelpController@send']);

/**registration */
Route::get('/registro', ['as' => 'site.registration', 'uses' => 'Site\RegistrationController@create']);
Route::post('/registro/store', ['as' => 'site.registration.store', 'uses' => 'Site\RegistrationController@store']);


/* policyPrivacy */
Route::get('/politicas-de-privacidade', ['as' => 'site.policyPrivacy', 'uses' => 'Site\PolicyPrivacyController@index']);
/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';

require __DIR__ . '/admin.php';
