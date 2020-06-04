<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'FrontendController@index')->name('Homepage');
Route::get('/blog', 'FrontendController@blog')->name('blog');
Route::get('/article/{slug}', 'FrontendController@singleview')->name('frontend.single');
Route::get('/category/single/{id}', 'FrontendController@cateview')->name('category.single');
Route::Post('/frontend/like', 'FrontendController@likePost')->name('frontend.post.like');
Route::get('/get/likeInformation', 'FrontendController@getlike')->name('post.get.like');

Auth::routes(['verify'=>true]);

route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin','verified']], function (){
    Route::get('/dashboard', 'DashboardController@Dashboard')->name('dashboard');

    Route::get('/user', 'DashboardController@user')->name('user');
    Route::Post('/add/user', 'UserController@userAdd')->name('user.add');
    Route::Post('/user/update/{id}','UserController@update')->name('user.update');

    Route::resource('/profile', 'ProfileController');

    Route::get('/settings', 'SettingsController@settings')->name('settings');
    Route::post('/settings/change/password', 'SettingsController@passwordchange')->name('settings.password');

    Route::get('/post', 'PostController@index')->name('post');
    Route::Post('/add/post', 'PostController@store')->name('post.add');
    Route::get('/add/post/all/post', 'PostController@table')->name('post.table');
    Route::get('/add/post/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::get('/add/post/view/{id}', 'PostController@view')->name('post.view');
    Route::post('/add/post/update/{id}', 'PostController@update')->name('post.update');
    Route::get('/add/post/delete/{id}', 'PostController@delete')->name('post.delete');

    Route::get('/category', 'DashboardController@category')->name('category');
    Route::post('/category/add', 'DashboardController@categoryadd')->name('category.add');
    Route::get('/data/get/category', 'DashboardController@categoryget')->name('category.get');
    Route::get('/category/delete/{id}', 'DashboardController@Catdelete')->name('category.delete');

    Route::get('/tag','TagController@index')->name('tag');
    Route::post('/tag/add','TagController@store')->name('tag.add');
    Route::get('/data/get/tag','TagController@get')->name('tag.get');
    Route::get('/tag/delete/{id}','TagController@delete')->name('tag.delete');
});


route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author','middleware'=>['auth','author','verified']], function (){
    Route::get('/dashboard', 'AuthorController@index')->name('dashboard');
    Route::get('/post', 'AuthorController@post')->name('post');
    Route::Post('/add/post', 'AuthorController@store')->name('post.add');
    Route::get('/all/post', 'AuthorController@all')->name('post.all');
    Route::get('/edit/post/{id}', 'AuthorController@edit')->name('post.edit');
    Route::get('/delete/post/{id}', 'AuthorController@PostDelete')->name('post.delete');
    Route::post('/update/post/{id}', 'AuthorController@update')->name('post.update');

    Route::resource('/profile', 'ProfileController');
    Route::get('/settings', 'SettingController@index')->name('setting');
    Route::post('/settings/change/password', 'SettingController@passwordchange')->name('settings.password');

});
//Route::get('/home', 'HomeController@index')->name('home');

