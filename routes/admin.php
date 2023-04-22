<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Editor;
use App\Http\Middleware\Administrador;


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

/* Grupo de Rotas Autenticadas */

Route::middleware(['auth'])->group(function () {
    /* Manager Dashboard  */
    Route::get('admin/painel', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);

    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware(['Administrador']);

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware(['Administrador']);;
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware(['Administrador']);;

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */
    });



    /* Events */
    Route::get('admin/schedule/index', ['as' => 'admin.schedule.index', 'uses' => 'Admin\ScheduleController@list']);
    Route::get('admin/schedule/show/{id}', ['as' => 'admin.schedule.show', 'uses' => 'Admin\ScheduleController@show']);
    Route::get('admin/schedule/create', ['as' => 'admin.schedule.create', 'uses' => 'Admin\ScheduleController@create']);
    Route::post('admin/schedule/store', ['as' => 'admin.schedule.store', 'uses' => 'Admin\ScheduleController@store']);
    Route::get('admin/schedule/edit/{id}', ['as' => 'admin.schedule.edit', 'uses' => 'Admin\ScheduleController@edit']);
    Route::put('admin/schedule/update/{id}', ['as' => 'admin.schedule.update', 'uses' => 'Admin\ScheduleController@update']);
    Route::get('admin/schedule/delete/{id}', ['as' => 'admin.schedule.delete', 'uses' => 'Admin\ScheduleController@destroy']);
    /* end Events */


    /* faq */
    Route::get('admin/faq/index', ['as' => 'admin.faq.index', 'uses' => 'Admin\FaqController@list']);
    Route::get('admin/faq/show/{id}', ['as' => 'admin.faq.show', 'uses' => 'Admin\FaqController@show']);
    Route::get('admin/faq/create', ['as' => 'admin.faq.create', 'uses' => 'Admin\FaqController@create']);
    Route::post('admin/faq/store', ['as' => 'admin.faq.store', 'uses' => 'Admin\FaqController@store']);
    Route::get('admin/faq/edit/{id}', ['as' => 'admin.faq.edit', 'uses' => 'Admin\FaqController@edit']);
    Route::put('admin/faq/update/{id}', ['as' => 'admin.faq.update', 'uses' => 'Admin\FaqController@update']);
    Route::get('admin/faq/delete/{id}', ['as' => 'admin.faq.delete', 'uses' => 'Admin\FaqController@destroy']);
    /* end faq */

    /* gallery */
    Route::get('admin/gallery/index', ['as' => 'admin.gallery.index', 'uses' => 'Admin\GalleryController@list']);
    Route::get('admin/gallery/show/{id}', ['as' => 'admin.gallery.show', 'uses' => 'Admin\GalleryController@show']);
    Route::get('admin/gallery/create', ['as' => 'admin.gallery.create', 'uses' => 'Admin\GalleryController@create']);
    Route::post('admin/gallery/store', ['as' => 'admin.gallery.store', 'uses' => 'Admin\GalleryController@store']);
    Route::get('admin/gallery/edit/{id}', ['as' => 'admin.gallery.edit', 'uses' => 'Admin\GalleryController@edit']);
    Route::put('admin/gallery/update/{id}', ['as' => 'admin.gallery.update', 'uses' => 'Admin\GalleryController@update']);
    Route::get('admin/gallery/delete/{id}', ['as' => 'admin.gallery.delete', 'uses' => 'Admin\GalleryController@destroy']);
    /* end gallery */

    /* imageGallery */
    Route::get('admin/imageGallery/create/{id}', ['as' => 'admin.imageGallery.create', 'uses' => 'Admin\ImageGalleryController@create']);
    Route::post('admin/imageGallery/store/{id}', ['as' => 'admin.imageGallery.store', 'uses' => 'Admin\ImageGalleryController@store']);
    Route::get('admin/imageGallery/delete/{id}', ['as' => 'admin.imageGallery.delete', 'uses' => 'Admin\ImageGalleryController@destroy']);
    /* End imageGallery */

    /* news */
    Route::get('admin/news/index', ['as' => 'admin.news.index', 'uses' => 'Admin\NewsController@list']);
    Route::get('admin/news/show/{id}', ['as' => 'admin.news.show', 'uses' => 'Admin\NewsController@show']);

    Route::get('admin/news/create', ['as' => 'admin.news.create', 'uses' => 'Admin\NewsController@create']);
    Route::post('admin/news/store', ['as' => 'admin.news.store', 'uses' => 'Admin\NewsController@store']);

    Route::get('admin/news/edit/{id}', ['as' => 'admin.news.edit', 'uses' => 'Admin\NewsController@edit']);
    Route::put('admin/news/update/{id}', ['as' => 'admin.news.update', 'uses' => 'Admin\NewsController@update']);

    Route::get('admin/news/delete/{id}', ['as' => 'admin.news.delete', 'uses' => 'Admin\NewsController@destroy']);
    /* end news */


    /* video */
    Route::get('admin/video/index', ['as' => 'admin.video.index', 'uses' => 'Admin\VideoController@list']);
    Route::get('admin/video/show/{id}', ['as' => 'admin.video.show', 'uses' => 'Admin\VideoController@show']);

    Route::get('admin/video/create', ['as' => 'admin.video.create', 'uses' => 'Admin\VideoController@create']);
    Route::post('admin/video/store', ['as' => 'admin.video.store', 'uses' => 'Admin\VideoController@store']);

    Route::get('admin/video/edit/{id}', ['as' => 'admin.video.edit', 'uses' => 'Admin\VideoController@edit']);
    Route::put('admin/video/update/{id}', ['as' => 'admin.video.update', 'uses' => 'Admin\VideoController@update']);

    Route::get('admin/video/delete/{id}', ['as' => 'admin.video.delete', 'uses' => 'Admin\VideoController@destroy']);
    /* end video */
    /* speaker */
    Route::get('admin/speaker/index', ['as' => 'admin.speaker.index', 'uses' => 'Admin\SpeakerController@index']);
    Route::get('admin/speaker/show/{id}', ['as' => 'admin.speaker.show', 'uses' => 'Admin\SpeakerController@show']);

    Route::get('admin/speaker/create', ['as' => 'admin.speaker.create', 'uses' => 'Admin\SpeakerController@create']);
    Route::post('admin/speaker/store', ['as' => 'admin.speaker.store', 'uses' => 'Admin\SpeakerController@store']);

    Route::get('admin/speaker/edit/{id}', ['as' => 'admin.speaker.edit', 'uses' => 'Admin\SpeakerController@edit']);
    Route::put('admin/speaker/update/{id}', ['as' => 'admin.speaker.update', 'uses' => 'Admin\SpeakerController@update']);

    Route::get('admin/speaker/delete/{id}', ['as' => 'admin.speaker.delete', 'uses' => 'Admin\SpeakerController@destroy']);
});
