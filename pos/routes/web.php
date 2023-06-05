<?php

use App\Http\Controllers\eCommereceController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\TestingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserroleController;
use App\Models\PermissionModel;
use App\Models\UserroleModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('hello',function(){
    return view('hello');
});
Route::get('/home',[TestingController::class,'index']);

Route::group(['prefix' => 'user'], function () {
    Route::resource('/user',UserController::class);
    Route::get('/newrecord',[UserController::class,'save']);
    Route::get('userlist',[UserController::class,'store'])->name('user.list');
    Route::post('adduser',[UserController::class,'adduser']);
    Route::post('updateuser',[UserController::class,'update']);
    Route::post('deleteuser/{id}',[UserController::class,'delete']);

});
Route::group(['prefix' => 'customer'], function () {
    Route::resource('/customer',UserController::class);
    
    


});
Route::group(['prefix' => 'permission'], function () {
    Route::resource('/permission',PermissionController::class);
    Route::get('/show',[PermissionController::class,'showedit']);
    Route::get('/showmodal',[PermissionController::class,'showadd']);
    Route::get('/editpermission',[PermissionController::class,'edit']);
    Route::post('addnewpermission',[PermissionController::class,'save']);
    Route::get('/deletepermission',[PermissionController::class,'destroy']);
    Route::get('/permissionlist',[PermissionController::class,'create'])->name('permission.list');

});
Route::group(['prefix' => 'ecommerce'], function () {
    Route::resource('/ecommerce',eCommereceController::class);
     

});
Route::group(['prefix' => 'userrole'], function () {
    Route::resource('/userrole',UserroleController::class);
    Route::get('/userrolelist',[UserroleController::class,'user_role_datatable'])->name('userrole.list');
    Route::get('/addnewuserrole');
    Route::get('/deleteuserrole',[UserroleController::class,'deleteuserrole']);
     

});

// Route::get('/d',[TestingController::class,'ajaxpagination']);
