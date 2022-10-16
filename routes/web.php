<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
//------------------------------------------Studen test
*/
Route::get('/',[StudentController::class,'get_all_student'])->name('insert');
Route::get('/student/{id}/edit','App\Http\Controllers\StudentController@get_student_by_id');
Route::put('/student/{id}/edit','App\Http\Controllers\StudentController@edit')

//------------------------------------EndStudent------------------------------
// Route::post('create','App\Http\Controllers\ControllerStudent@insert');
// Route::get('/users', [App\Http\Controllers\ControllerStudent::class, 'index']);
// Route::get('cheo',function()
// {
//     return view('Cheo.cheo');
// });
//------------------BeginCheo----------------------------------------------/
    // Route::get('/','App\Http\Controllers\UserController@showRegisterForm');

    // Route::post('/','App\Http\Controllers\UserController@logincheck')->name('Login.check');

    // //--------------------------------------------/
    // // Route::get('/infomation','App\Http\Controllers\InformationController@index');
    // Route::get('/infomation/create', [InformationController::class,'create']);
    // Route::post('/infomation/create','App\Http\Controllers\InformationController@store');


    // Route::get('/infomation/{id}/edit','App\Http\Controllers\InformationController@edit');
    // Route::put('/infomation/{id}/edit', 'App\Http\Controllers\InformationController@update');
    // Route::post('infomation/{id}','App\Http\Controllers\InformationController@destroy' );
    // Route::get('infomation/dangky','App\Http\Controllers\InformationController@signin' );


//----------------------End Cheo-------------
// Route::get('ut/{username}',function($username)
// {
//     return view('about',['user'=>$username]);
// });



// Route::get('1', function()
// {
//     return view('about');
// })->name('user');
// ?>



