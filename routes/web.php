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

Route::get('/', function () {
    return view('index');
});
Route::get('/news',function (){
    return view('news');
});

Route::get('/foodpictorial',function (){
    return view('foodpictorial');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');

    $router->get('post', 'PostController@index');

    $router->get('upload', 'UploadController@index');
    $router->post('admin/upload/file', 'UploadController@uploadFile');
    $router->delete('admin/upload/file', 'UploadController@deleteFile');
    $router->post('admin/upload/folder', 'UploadController@createFolder');
    $router->delete('admin/upload/folder', 'UploadController@deleteFolder');
});
