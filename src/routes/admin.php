<?php

Route::name('admin.tawkto.')
    ->prefix(ADMIN_PREFIX . '/tawkto')
    ->middleware(['admin'])
    ->namespace('MicroweberPackages\Modules\Tawkto\Http\Controllers\Admin')
    ->group(function () {

        Route::get('/', 'AdminTawktoController@index')->name('index');

    });
