<?php

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



//=====================Start Frontend Controllers==================

// use Illuminate\Routing\Route;

Route::get('/', 'IndexController@index');
Auth::routes();


Route::group(['middleware'=>['auth','UserLevel']],function(){
  Route::get('/home', 'HomeController@index')->name('home');
});
Route::resource('cat', 'CategoryController');
Route::resource('pro', 'ProductController');
Route::resource('commen','CommentController');
Route::resource('contactt','ContactController');
Route::resource('postt','PostController');
Route::resource('comment-post','CommentpostController');



//Ajax Routes Start
Route::group([], function(){
    Route::resource('/basket', 'BasketController')->middleware('auth');
//  Route::get('/product', 'BasketController@store')->middleware('auth');
    Route::resource('/favorite', 'FavoriteController')->middleware('auth');
    Route::resource('/factor', 'FactorController')->middleware('auth');
    Route::resource('/supportt', 'SupportController')->middleware('auth');
    Route::get('/download/{id}', 'DownloadController@download');

    Route::get('/address', 'AddressController@index')->middleware('auth')->name('address.index');

});

//--------------------------- checkout route -------------------
Route::get('factorfaild', 'FactorController@showFaild')->name('factorfaild');
Route::get('do/payment/{id}', 'FactorController@do_payment_zarinpal_faild')->name('do.payment.faild');
Route::get('payment/callback/{id}','FactorController@Zarinpal_callback')->name('payment.zarinpal.callback');



//=====================End Frontend Controllers====================

//==================Start Backend Controllers======================
Route::group(['namespace'=>'admin','middleware'=>['auth','UserLevel'],'prefix'=>'/admin'],function(){
    Route::resource('/product', 'ProductController');
    Route::resource('/role', 'RoleController');
    Route::resource('/user', 'UserController');
    Route::resource('/permission', 'PermissionController');
    Route::resource('/category', 'CategoryController');
    Route::resource('/producer', 'ProducerController');
    Route::resource('/slider', 'SliderController');
    Route::resource('/filter', 'FilterController');
    Route::resource('/sliderparent', 'SliderparentController');
    Route::resource('/tag', 'TagController');
    Route::resource('/comment', 'CommentController');
    Route::resource('/post', 'PostController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/support', 'SupportController');

    Route::get('create/gallery/{product}', 'ProductController@createGallery')->name('create.gallery');
    Route::get('delete/gallery/{id}', 'ProductController@galleryDestroy')->name('delete.gallery');
    Route::post('add/gallery', 'ProductController@addGallery')->name('add.gallery')->middleware('optimizeImages');
    Route::get('delete/allgallery/{product}', 'ProductController@AllGalleryDestroy')->name('delete.allgallery');





});
Route::group(['middleware'=>['auth']],function(){
    Route::get('/userpanel', 'admin\UserController@userPanel')->name('userpanel');
    Route::get('/useredit', 'admin\UserController@userEdit')->name('useredit');
    Route::post('/userupdate', 'admin\UserController@userUpdate')->name('userupdate');
});



//==================End Backend Controllers========================


//==================Ajax Routes End==========================



// <IfModule mod_rewrite.c>
//   RewriteEngine On
//   RewriteRule ^(.*)$ public/$1 [L]
// </IfModule>




// RewriteBase /

// RewriteCond %{HTTP_HOST} !^eshop.persiatelecom.ir
// RewriteCond %{REQUEST_URI} !^public
// RewriteRule ^(.*)$ public/$1 [L]

// RewriteCond %{HTTP_HOST} ^eshop.persiatelecom.ir
// RewriteCond %{REQUEST_URI} !^public
// RewriteRule ^(.*)$ public/ [L]
