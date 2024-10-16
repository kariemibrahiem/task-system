<?php

use App\Http\Controllers\admin\auth\authController;
use App\Http\Controllers\auth\LoginControllers;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\SubtaskController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Jobs\taskJob;
use Illuminate\Support\Facades\Route;


Route::view("/" ,'index')->name('main'); // the main page to allow login and registration


Route::get('users' , [UserController::class , 'index'])->name('users')->middleware('auth');;     // simple user display controller



// the main routes to tasks and there funcitons
Route::controller(TaskController::class)->group(function(){
    Route::get('tasks' , 'index')->name('tasks')->middleware('auth');
    Route::get('tasks.delete/{id}' , 'delete')->name('tasks.delete')->middleware('auth');
    Route::get('task.create' , 'create')->name('tasks.create')->middleware('auth');
    Route::get('task.store' , 'store')->name('tasks.store')->middleware('auth');
    Route::get('task.edit/{id}' , 'edit')->name('tasks.edit')->middleware('auth');
    Route::get('task.update/{id}' , 'update')->name('tasks.update')->middleware('auth');

});




// the main routes to subtasks and there funcitons
Route::controller(SubtaskController::class)->group(function(){
    Route::get('subtask/{id}' , 'index')->name('subtask.view')->middleware('auth');
    Route::get('subtask.delete/{id}' , 'delete')->name('subtasks.delete')->middleware('auth');
    Route::get('subtask.edit/{id}' , 'edit')->name('subtasks.edit')->middleware('auth');
    Route::get('subtask.update/{id}' , 'update')->name('subtasks.update')->middleware('auth');
    Route::get('subtask.create/{id}' , 'create')->name('subtasks.create')->middleware('auth');
    Route::get('subtask.store/{id}' , 'store')->name('subtasks.store')->middleware('auth');

});


// the login and regist users 
Route::controller(authController::class)->group(function(){
    Route::get('admin.login' , 'login')->name('login');
    Route::get('admin.login_save' , 'login_save')->name('login_save');
    Route::get('admin.regist' , 'regist')->name('regist');
    Route::get('admin.regist_save' , 'regist_save')->name('regist_save');
    Route::get('admin.logout' , 'logout')->name('logout');
    Route::get('admin.forgot' , 'forgot')->name('forgot');
});


