<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// USER
    Route::get('/home', 'HomeController@index');
    // klo login eror ganti yang atas
    Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');
















//==========================================================\\
                    // ADMIN START \\
//==========================================================\\

Route::prefix('admin')->group( function(){
    
    //Route Normal For Admin Login,Dashboard,Logout
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.home');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    // Route Normal For Admin Reset Password
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');  
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');  
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');  
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');  
    

});


    // Route Resource For User
    Route::resource('Siswa', 'Crud\SiswaController');
    
    // Route Resource For Admin
    Route::resource('Admin', 'Crud\AdminController');

    // Route Resource For Kategori
    Route::resource('Spp', 'Crud\SppController');

    // Route Resource For Prioritas
    //Route::resource('', 'Crud\PrioritasController');
    
    // Route Resource For Status
    Route::resource('Kelas', 'Crud\KelasController');
    

//==========================================================\\
                    // ADMIN END \\
//==========================================================\\