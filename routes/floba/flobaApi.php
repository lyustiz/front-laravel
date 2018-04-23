<?php

Route::group(['prefix' => 'floba'], function () {

    Route::get('status/all', 'floba\VehiculoController@all')
            ->name('status.all')->where('all', 'all');
});