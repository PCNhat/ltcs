<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\Product'], function () {
    /**
     * @See ProductController
     */
    Route::resource('product', 'ProductController')->parameters(['product' => 'id']);

    Route::get('product/{id}/create', 'ProductDetailController@create')->name('product-detail.create');

    Route::post('product/{id}', 'ProductDetailController@store')->name('product-detail.store');

    Route::delete('product-detail/{id}', 'ProductController@deleteProductDetail')->name('product.detail');
});
