<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\Product'], function () {
    /**
     * @See ProductController
     */
    Route::resource('product', 'ProductController')->parameters(['product' => 'id']);

    Route::delete('product-detail/{id}', 'ProductController@deleteProductDetail')->name('product.detail');
});
