<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\Post'], function () {
    /**
     * @See PostController
     */
    Route::resource('post', 'PostController')->parameters(['post' => 'id']);
});
