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

Route::get('/foodpictorial',function(){
    return view('foodpictorial');
});

Route::get('/foodpictorial1',function(){
    return view('foodpictorial1');
});

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::get('/abc',function(){
    return view('abc');
});

Route::get('/news', 'FrontController@index');

Route::get('/news/{id}', 'FrontController@show');

Auth::routes();

Route::get('/home', 'MessageController@index');

Route::get('/messages', 'MessageController@index');

Route::post('/message', 'MessageController@store');

Route::get('messages/{message}/edit','MessageController@edit');

Route::patch('messages/{message}', 'MessageController@update');

Route::get('messages/{message}', 'MessageController@show');

Route::delete('/message/{message}', 'MessageController@destroy');

Route::group(['prefix' => 'admin','namespace' => 'Admin'],function ($router)
{
    $router->get('login', 'LoginController@showLoginForm')->name('admin.login');
    $router->post('login', 'LoginController@login');
    $router->post('logout', 'LoginController@logout');

    $router->get('dash', 'DashboardController@index');

    $router->get('news', 'NewsController@index')->name('news.index');
    $router->get('news/create', 'NewsController@create')->name('news.create');
    $router->post('news', 'NewsController@store')->name('news.store');
    $router->get('news/{id}/edit', 'NewsController@edit')->name('news.edit');
    $router->patch('news/{id}', 'NewsController@update')->name('news.update');
    $router->delete('news/{id}', 'NewsController@destroy')->name('news.destroy');

    $router->get('member', 'MemberController@index')->name('member.index');
    $router->get('member/{id}/edit', 'MemberController@edit')->name('member.edit');
    $router->patch('member/{id}', 'MemberController@update')->name('member.update');
    $router->delete('member/{id}', 'MemberController@destroy')->name('member.destroy');

    $router->get('upload', 'UploadController@index');
    $router->post('admin/upload/file', 'UploadController@uploadFile');
    $router->delete('admin/upload/file', 'UploadController@deleteFile');
    $router->post('admin/upload/folder', 'UploadController@createFolder');
    $router->delete('admin/upload/folder', 'UploadController@deleteFolder');
});
