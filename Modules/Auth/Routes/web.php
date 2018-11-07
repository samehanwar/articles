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
    return redirect('/auth/login');
});

Route::namespace('Admin')->prefix('auth')->group(function(){

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('logout', 'Auth\LoginController@logout');
    // Registration Routes...
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    // Password Reset Routes...
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    //users
    Route::get('/users', 'AdminController@index');
    Route::post('/users/register', 'AdminController@store');
    Route::get('/users/create', 'AdminController@create');
    Route::get('/users/getUsersData', 'AdminController@getUsersData');
    // Articles
    Route::get('/article', 'ArticleController@index');
    Route::get('/article/getArticlesData', 'ArticleController@getArticlesData');
    Route::get('/article/create', 'ArticleController@create');
    Route::get('/article/show/{id}', 'ArticleController@show');
    Route::post('/article/store', 'ArticleController@store');
    //Roles
    Route::get('/role', 'RoleController@index');
    Route::get('/role/getRolesData', 'RoleController@getRolesData');
    Route::get('/role/create', 'RoleController@create');
    Route::post('/role/store', 'RoleController@store');
    Route::get('/role/edit/{id}', 'RoleController@edit');
    Route::put('/role/update/{id}', 'RoleController@update');
    Route::get('/role/delete/{id}', 'RoleController@destroy');
    //permission
    Route::get('/permission', 'PermissionController@index');
    Route::get('/permission/getpermissionsData', 'PermissionController@getpermissionsData');
    Route::get('/permission/create', 'PermissionController@create');
    Route::post('/permission/store', 'PermissionController@store');
    Route::get('/permission/edit/{id}', 'PermissionController@edit');
    Route::put('/permission/update/{id}', 'PermissionController@update');
    Route::get('/permission/delete/{id}', 'PermissionController@destroy');

});

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/unauthorize', 'DashboardController@unauthorize')->name('unauthorize');
