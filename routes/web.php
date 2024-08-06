<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\EmployeesController;
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


Route::get('/', 'App\Http\Controllers\FrontController@index')->name('homepage');
require __DIR__.'/auth.php';

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->name('admin.')->group(function (){
   Route::namespace('Auth')->middleware('guest:admin')->group(function (){
       Route::get('login','AuthenticatedSessionController@create')->name('login');
       Route::post('login','AuthenticatedSessionController@store')->name('adminlogin');
       Route::put('/password', 'PasswordController@update')->name('password.update');
   });
   Route::middleware('admin')->group(function(){

       Route::get('/','HomeController@base')->name('base');
       // Roles Routes
       Route::resource('roles', RoleController::class);
       Route::get('roles/{id}/delete','RoleController@destroy')->name('roles.delete');
       Route::post('roles/destroy_all','RoleController@destroy_all')->name('roles.destroy_all');
       Route::post('roles/search','RoleController@search')->name('roles.search');
       // Permissions Routes
       Route::resource('permissions', PermissionsController::class);
       Route::get('permissions/{id}/delete','PermissionsController@destroy')->name('permissions.delete');
       Route::post('permissions/destroy_all','PermissionsController@destroy_all')->name('permissions.destroy_all');
       Route::post('permissions/search','PermissionsController@search')->name('permissions.search');
       // Users Routes
       Route::get('users/archive', 'UsersController@archive')->name('users.archive');
       Route::resource('users', UsersController::class);
       Route::post('users/destroy_all','UsersController@destroy_all')->name('users.destroy_all');
       Route::get('users/{id}/delete','UsersController@destroy')->name('users.delete');
       Route::post('users/restore_all','UsersController@restore_all')->name('users.restore_all');
       Route::get('users/{id}/restore','UsersController@restore')->name('users.restore');
       Route::post('users/search','UsersController@search')->name('users.search');
       // Admins Routes
       Route::get('admins/archive', 'AdminsController@archive')->name('admins.archive');
       Route::resource('admins', AdminsController::class);
       Route::post('admins/destroy_all','AdminsController@destroy_all')->name('admins.destroy_all');
       Route::get('admins/{id}/delete','AdminsController@destroy')->name('admins.delete');
       Route::post('admins/restore_all','AdminsController@restore_all')->name('admins.restore_all');
       Route::get('admins/{id}/restore','AdminsController@restore')->name('admins.restore');
       Route::post('admins/search','AdminsController@search')->name('admins.search');


       // Admins Routes
       Route::get('categories/archive', 'CategoriesController@archive')->name('categories.archive');


       Route::get('categories/all', [CategoriesController::class, 'getCategoriesDatatable'])->name('categories.all');
       Route::get('categories/trashed', [CategoriesController::class, 'getTrshedCategoriesDatatable'])->name('categories.trashed');
       Route::resource('categories', CategoriesController::class);
       Route::get('categories/{id}/delete','CategoriesController@destroy')->name('categories.delete');
       Route::get('categories/{id}/restore','CategoriesController@restore')->name('categories.restore');
       Route::post('categories/search','CategoriesController@search')->name('categories.search');

       // Media Routes
       Route::get('media/archive', 'MediaController@archive')->name('media.archive');
       Route::get('media','MediaController@index')->name('media.index');
       Route::post('media/upload','MediaController@upload')->name('media.upload');
       Route::get('media/{id}/show','MediaController@show')->name('media.show');
       Route::get('media/{id}/edit','MediaController@edit')->name('media.edit');
       Route::put('media/{id}/update','MediaController@update')->name('media.update');
       Route::post('media/destroy_all','MediaController@destroy_all')->name('media.destroy_all');
       Route::get('media/{id}/delete','MediaController@destroy')->name('media.delete');
       Route::post('media/restore_all','MediaController@restore_all')->name('media.restore_all');
       Route::get('media/{id}/restore','MediaController@restore')->name('media.restore');
       Route::post('media/search','MediaController@search')->name('media.search');

       // Dashboard Routes
       Route::get('/dashboard','HomeController@index')->name('dashboard');
       Route::get('/profile', 'ProfileController@edit')->name('profile.edit');
       Route::patch('/profile', 'ProfileController@update')->name('profile.update');
       Route::delete('/profile', 'ProfileController@destroy')->name('profile.destroy');
       Route::get('sidebar','HomeController@sidebar')->name('sidebar');

       // Players Routes

       Route::get('employees/archive', 'EmployeesController@archive')->name('employees.archive');
       Route::get('employees/all', [EmployeesController::class, 'getEmployeesDatatable'])->name('employees.all');
       Route::get('employees/trashed', [EmployeesController::class, 'getTrshedEmployeesDatatable'])->name('employees.trashed');
       Route::resource('employees', EmployeesController::class);
       Route::get('employees/{id}/delete','EmployeesController@destroy')->name('employees.delete');
       Route::get('employees/{id}/restore','EmployeesController@restore')->name('employees.restore');
       Route::post('employees/search','EmployeesController@search')->name('employees.search');

   });
    Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});
