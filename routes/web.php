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

Route::get('/', 'FrontController@index')->name('home.index');

Route::group(['prefix'=>'home'],function(){

    Route::get('/', 'HomeController@index');
    Route::get('/listing', 'ListingController@index');
    /*Route::get('/details', 'DetailsController@index');*/

});




Route::group(['prefix'=>'admin'],function(){

    Route::get('/','Admin\AdminController@index')->name('admin.index');
    
    Route::get('/category/create','Admin\CategoryController@create')->name('category.create')->middleware('permission:Admin');
    Route::post('/category/create','Admin\CategoryController@store');
    Route::get('/category/list','Admin\CategoryController@index')->name('category.list')->middleware('permission:Admin');
    Route::get('/category/edit/{category_id}','Admin\CategoryController@edit')->name('category.edit')->middleware('permission:Admin');
    Route::post('/category/edit/{category_id}','Admin\CategoryController@update');
    Route::get('/category/inactive/{category_id}','Admin\CategoryController@inactive')->name('category.inactive')->middleware('permission:Admin');
    Route::get('/category/active/{category_id}','Admin\CategoryController@active')->name('category.active')->middleware('permission:Admin');
    
    
    Route::get('/user/list','Admin\UserController@index')->name('user.list')->middleware('permission:Admin');
    Route::get('/user/edit/{user_id}','Admin\UserController@edit')->name('user.edit')->middleware('permission:Admin|View');
    Route::post('/user/edit/{user_id}','Admin\UserController@update');
    Route::get('/user/add_permission/{user_id}','Admin\UserController@add')->name('user.add')->middleware('permission:Admin');
    Route::post('/user/add_permission/{user_id}','Admin\UserController@add_permission');
    Route::get('/user/delete_permission/{user_id}','Admin\UserController@delete')->name('user.delete')->middleware('permission:Admin');
    Route::post('/user/delete_permission/{user_id}','Admin\UserController@delete_permission');

    Route::get('/post/list','Admin\AdminController@admin_post_list')->name('admin.post.list')->middleware('permission:Admin');
    Route::get('/post/review/{post_id}','Admin\AdminController@comment')->name('admin.post.comment')->middleware('permission:Admin');
    Route::post('/post/review/{post_id}','Admin\AdminController@update');
    Route::get('/post/delete/{post_id}','Admin\AdminController@destroy')->name('admin.post.delete')->middleware('permission:Admin');
    Route::get('/userprofile/{user_id}','Admin\AdminController@showuser')->name('admin.user.profile')->middleware('permission:Admin');
    


});
Route::group(['prefix'=>'user'],function(){

   Route::get('/profile/{user_id}','Admin\UserController@show')->name('user.profile')->middleware('permission:View');

   Route::get('/post/create','Admin\PostController@create')->name('user.post.create')->middleware('permission:Create');
   Route::post('/post/create','Admin\PostController@store');
   Route::get('/post/list','Admin\PostController@index')->name('user.post.list')->middleware('permission:View');
   Route::get('/post/edit/{post_id}','Admin\PostController@edit')->name('user.post.edit')->middleware('permission:Edit');
   Route::post('/post/edit/{post_id}','Admin\PostController@update');
   Route::get('/post/delete/{post_id}','Admin\PostController@destroy')->name('user.post.delete')->middleware('permission:Delete');

    
    

});

Route::group(['prefix'=>'post'],function(){

   Route::get('/details/{post_id}','FrontController@show')->name('details.post');
   Route::get('/category/{category_id}','FrontController@showcategory')->name('category.post');
   Route::get('/author_wise/{author_id}','FrontController@authorwise')->name('author.post');
   Route::get('/date_wise/{date}','FrontController@datewise')->name('date.post');

   

    
    

});

Auth::routes();

Route::get('/logout', 'LogoutController@index');


