<?php

use Illuminate\Support\Facades\Route;
use App\User;

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
Route::group(['middleware'=>'auth', 'prefix' => 'admin/', 'as' => 'admin.'], function () {
    require __DIR__ . '/webs/backend/user.php';
    require __DIR__ . '/webs/backend/category.php';
    require __DIR__ . '/webs/backend/product.php';
    require __DIR__ . '/webs/backend/post.php';
    require __DIR__ .'/webs/backend/contact.php';

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


Route::get('/', function () {
    return view('frontend.index');
});





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

Route::get('product', function () {
   return view('frontend.products.products');
});
Route::get('product-detail', 'PageController@productDetail')->name('product.detail');
Route::get('compare-products', 'PageController@compareProducts')->name('compare.products');

Route::get('posts', function () {
    return view('frontend.posts.posts');
});
Route::get('post-detail', function () {
    $post = \App\Post::find(3);
    return view('frontend.posts.post_detail', compact('post'));
});

Route::get('list-post', function () {
    return view('backend.posts.index');
});



// --------------auth-----------------

Route::get('textediter', function () {
    return view('testtextediter');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('parentCategory', function () {
   $category = \App\Category::with('parentCategory')->find(18); // danh mục con

    function getParentCategoryName($data, $parentCategory) //hàm đệ quy
    {
        if ($parentCategory->category !== null) {
            $data[] = $parentCategory->category->name;

            getParentCategoryName($data, $parentCategory->category);
        }
        return $data;
    }

   $data[] = $category->name;

   if($category->parentCategory !== null){
       $data[] = $category->parentCategory->name;
       $listCategory = getParentCategoryName($data, $category->parentCategory);
   }

   dd($listCategory);
});
