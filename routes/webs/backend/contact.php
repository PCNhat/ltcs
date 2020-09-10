<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Backend\Contact'], function () {

    /**
     * @see \App\Http\Controllers\Backend\Contact\ContactController::index();
     */
    Route::get('contact', 'ContactController@index')->name('contact.index');

    /**
     * @see \App\Http\Controllers\Backend\Contact\ContactController::store();
     */
    Route::post('contact', 'ContactController@store')->name('contact.store');

    /**
     * @see \App\Http\Controllers\Backend\Contact\ContactController::hidden();
     */
    Route::post('contact/{id}/hidden', 'ContactController@hidden')->name('contact.hidden');

    /**
     * @see \App\Http\Controllers\Backend\Contact\ContactController::listContact();
     */
    Route::get('list-contact', 'ContactController@listContact')->name('contact.list_contact');

    /**
     * @see \App\Http\Controllers\Backend\Contact\ContactController::storeReply()
     */
    Route::post('reply-contact/{id}', 'ContactController@storeReply')->name('contact.store_reply');
});
