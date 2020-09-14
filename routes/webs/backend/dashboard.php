<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\Dashboard'], function () {
    /**
     * @see \App\Http\Controllers\Backend\Dashboard\DashboardController
     */
    Route::get('', 'DashboardController@index')->name('dashboard.index');
});
