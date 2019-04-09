<?php
Route::group(['middelware' => 'auth'], function () {
    Route::get('/', 'TimeController@index');
    Route::group(['prefix' => 'servicio'], function () {
        Route::get('create', 'ServicioController@getCreate');
        Route::get('categorias', 'ServicioController@getCategorias');
        Route::get('/show/{id}', 'ServicioController@getShow');
        Route::post('/create', 'ServicioController@postCreate');
        Route::get('edit/{id}', 'ServicioController@getEdit');
        Route::put('edit/{id}', 'ServicioController@putEdit');
        Route::put('changePendiente/{id}', 'ServicioController@changePendiente');
        Route::get('/{cat?}', 'ServicioController@getIndex');
    });
});
Auth::routes();
Route::get('/home', 'TimeController@index')->name('home');
