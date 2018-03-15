<?php

Route::group(['prefix' => 'rasio-guru-murid-sma-ma', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RasioGMSmaMa\Http\Controllers\RasioGMSmaMaController@index',
        'create'     => 'Bantenprov\RasioGMSmaMa\Http\Controllers\RasioGMSmaMaController@create',
        'store'     => 'Bantenprov\RasioGMSmaMa\Http\Controllers\RasioGMSmaMaController@store',
        'show'      => 'Bantenprov\RasioGMSmaMa\Http\Controllers\RasioGMSmaMaController@show',
        'update'    => 'Bantenprov\RasioGMSmaMa\Http\Controllers\RasioGMSmaMaController@update',
        'destroy'   => 'Bantenprov\RasioGMSmaMa\Http\Controllers\RasioGMSmaMaController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rasio-guru-murid-sma-ma.index');
    Route::get('/create',$controllers->create)->name('rasio-guru-murid-sma-ma.create');
    Route::post('/store',$controllers->store)->name('rasio-guru-murid-sma-ma.store');
    Route::get('/{id}',$controllers->show)->name('rasio-guru-murid-sma-ma.show');
    Route::put('/{id}/update',$controllers->update)->name('rasio-guru-murid-sma-ma.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rasio-guru-murid-sma-ma.destroy');

});

