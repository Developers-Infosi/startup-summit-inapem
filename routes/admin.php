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

  /* expositores */
  Route::get('admin/expositores/index', ['as' => 'admin.ehibitor.index', 'uses' => 'Admin\EhibitorController@index']);
  Route::get('admin/expositores/show/{id}', ['as' => 'admin.ehibitor.show', 'uses' => 'Admin\EhibitorController@show']);
  Route::get('admin/expositores/create', ['as' => 'admin.ehibitor.create', 'uses' => 'Admin\EhibitorController@create']);
  Route::post('admin/expositores/store', ['as' => 'admin.ehibitor.store', 'uses' => 'Admin\EhibitorController@store']);
  Route::get('admin/expositores/edit/{id}', ['as' => 'admin.ehibitor.edit', 'uses' => 'Admin\EhibitorController@edit']);
  Route::put('admin/expositores/update/{id}', ['as' => 'admin.ehibitor.update', 'uses' => 'Admin\EhibitorController@update']);
  Route::get('admin/expositores/delete/{id}', ['as' => 'admin.ehibitor.delete', 'uses' => 'Admin\EhibitorController@destroy']);
  /* end expositores */





    /* registration */
    Route::get('admin/registration/index', ['as' => 'admin.registration.index', 'uses' => 'Admin\RegistratonController@index']);
    Route::get('admin/registration/show/{id}', ['as' => 'admin.registration.show', 'uses' => 'Admin\RegistratonController@show']);
    Route::get('admin/registration/edit/{id}', ['as' => 'admin.registration.edit', 'uses' => 'Admin\RegistratonController@edit']);
    Route::put('admin/registration/update/{id}', ['as' => 'admin.registration.update', 'uses' => 'Admin\RegistratonController@update']);


    /* speaker */
    Route::get('admin/speaker/index', ['as' => 'admin.speaker.index', 'uses' => 'Admin\SpeakerController@index']);
    Route::get('admin/speaker/show/{id}', ['as' => 'admin.speaker.show', 'uses' => 'Admin\SpeakerController@show']);
    Route::get('admin/speaker/create', ['as' => 'admin.speaker.create', 'uses' => 'Admin\SpeakerController@create']);
    Route::post('admin/speaker/store', ['as' => 'admin.speaker.store', 'uses' => 'Admin\SpeakerController@store']);
    Route::get('admin/speaker/edit/{id}', ['as' => 'admin.speaker.edit', 'uses' => 'Admin\SpeakerController@edit']);
    Route::put('admin/speaker/update/{id}', ['as' => 'admin.speaker.update', 'uses' => 'Admin\SpeakerController@update']);
    Route::get('admin/speaker/delete/{id}', ['as' => 'admin.speaker.delete', 'uses' => 'Admin\SpeakerController@destroy']);
});
