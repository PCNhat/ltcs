<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\Category'], function () {
    /**
     * @See CategoryController
     */
    Route::resource('category', 'CategoryController')->parameters(['category' => 'id']);
});
