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
    return view('pages.index');
});
// route for guest
Route::group(['middleware'=>'guest'], function() {
    
    
    Route::get('/login',[
        'uses'=>'AuthController@login',
        'as'=>'login'
    ]);
    
    Route::get('/signup', [
        'uses'=>'AuthController@signup',
        'as'=>'signup'
    ]);
    
    Route::get('/forgetpassword', [
        'uses'=>'AuthController@forgetPassword',
        'as'=>'forgetpassword'
    ]);
    
    Route::post('/register', [
        'uses'=> 'AuthController@Register',
        'as'=> 'register'
    ]);
    
    Route::post('/sigin', [
        'uses'=> 'AuthController@Sigin',
        'as'=>'sigin'
    ]);

    Route::get('/jobcate', [
        'uses'=> 'RouteController@jobcate',
        'as'=> 'jobcate'
    ]);

    Route::get('/productcate', [
        'uses'=> 'RouteController@productcate',
         'as'=> 'productcate'
    ]);

    Route::get('/viewjob/{catname}', [
        'uses'=> 'RouteController@viewjob',
        'as'=> 'viewjob'
    ]);


    Route::get('/viewads', [
        'uses'=> 'RouteController@Viewads',
        'as'=> 'viewads'
    ]);

    Route::post('/postads', [
        'uses'=> 'UserController@Postads',
        'as'=>'postads'
    ]);
});


Route::group(['middleware'=>'auth'], function() {
    Route::get('/complete', [
        'uses'=>'AuthController@CompleteRegister',
        'as'=> 'complete'
    ]);

    Route::get('/dashboard', [
        'uses'=> 'AuthController@Dashboard',
        'as'=> 'dashboard'
    ]);

    Route::post('/completeregister',[
        'uses'=>'UserController@CompleteRegister',
        'as'=> 'completeregister'
    ]);

    Route::get('/logout', [
        'uses'=> 'AuthController@Logout',
        'as'=> 'logout'
    ]);
});