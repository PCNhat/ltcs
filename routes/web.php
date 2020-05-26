<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});
//-------------  Backend   ------------
Route::group(['middleware'=>'auth','prefix' => 'admin/'], function () {
    Route::get('dashboard','AdminPageController@getDashBoard');
    Route::get('add-categories','AdminPageController@getAddCategories');
    Route::post('add-categories','AdminPageController@postAddCategories');
    Route::get('list-categories','AdminPageController@getListCategories')->name('list.categories');
    Route::get('add-info-post','AdminPageController@getAddInfoPost');
    Route::post('add-info-post','AdminPageController@postAddInfoPost');
    Route::get('list-info-post','AdminPageController@getListInfoPost')->name('list.infopost');
    Route::group(['prefix'=>'delete'], function(){
        Route::get('categories/{id}','AdminPageController@deleteCategories');
        Route::get('info-post/{id}','AdminPageController@deleteInfoPost');
    });
    Route::group(['prefix'=>'edit'],function(){
        Route::get('categories/{id}','AdminPageController@getEditCategories');
        Route::post('categories/{id}','AdminPageController@postEditCategories');
        Route::get('info-post/{id}','AdminPageController@getEditInfoPost');
        Route::post('info-post/{id}','AdminPageController@postEditCateg');
    });
});
Route::get('send-mail', function () {
   
    $details = [
        'title' => 'This is title',
        'body' => 'This is body'
    ];
   
    \Mail::to('vithiluu1415@gmail.com')->send(new \App\Mail\MyTestMail($details));
   
    dd("Email is Sent.");
});




//-------------  Frontend   ------------


Route::get('/','PageController@getIndex');
Route::get('course','PageController@getCourse');
Route::get('good-post','PageController@getGood_post');
Route::get('author','PageController@getAuthor');
Route::get('video','PageController@getVideo');
Route::get('nav/{page}','PageController@getNav');
Route::get('drops',function(){
    Schema::drop('failed_jobs');
});
// --------------auth-----------------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// --------------auth-----------------
