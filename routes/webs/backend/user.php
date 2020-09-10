<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\User'], function () {

    Route::resource('user', 'UserController')->parameters(['user' => 'id']);
});
