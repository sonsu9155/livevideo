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
    return view('home.index');
});

Auth::routes();
// Route::get('/auth/login', 'Auth\LoginController@login')->name('Login');
// Route::post('/auth/dologin', 'Auth\LoginController@dologin')->name('doLogin');
 Route::get('/auth/logout', 'Auth\LoginController@logout')->name('Logout');
// Route::get('/auth/register', 'Auth\LoginController@register')->name('Register');


Route::group(['middleware' => 'auth'],function(){
        
        Route::get('/home', 'HomeController@index')->name('home');        
        Route::get('/mobile', 'HomeController@mobile');
        Route::get('/teacher', 'HomeController@teacher');
        // Route::get('admin/chartmng', 'ChartController@index');

        Route::get('/vipvideo', 'LivevideoController@vipvideo');
        Route::post('/chat/send', 'LivevideoController@send');
        Route::post('/profile/update', 'LivevideoController@profile_update');

});