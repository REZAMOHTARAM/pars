<?php


use App\Http\Controllers\Admin\ArzyabiController;
use App\Http\Controllers\Admin\BunchController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\QuestionBunchController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SubBunchController;
use App\Http\Controllers\Admin\SubSetBunchController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
});

Route::resource('users', UserController::class);
Route::get('/users/{user}/permissions' , 'User\PermissionController@create')->name('users.permissions');
Route::post('/users/{user}/permissions' , 'User\PermissionController@store')->name('users.permissions.store');
Route::resource('bunches', BunchController::class);
Route::resource('subbunches', SubBunchController::class);
Route::resource('subsetbunches', SubSetBunchController::class);
Route::resource('questionbunches', QuestionBunchController::class);
Route::resource('permissions', PermissionController::class);
Route::resource('roles', RoleController::class);
//Route::resource('arzyabi', ArzyabiController::class);


// admin routes
Route::group(['namespace' => 'Admin'],function(){

    // arzyabi routes
    Route::group(['prefix' => 'arzyabi'], function () {
        Route::get('/', [ArzyabiController::class,'index'])->name('arzyabi.index');
        Route::get('/edit', [ArzyabiController::class,'edit'])->name('arzyabi.edit');

    });


});






