<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UsersController;
use Illuminate\Http\Request;
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

Route::get('/', function () {
    return view('welcome');
});

/*Route::group(['prefix'  => 'articles'], function(){

    Route::get('/view/{id}', [
        'uses'  =>  'TestController@view',
        'as'    =>  'articlesView'
    ]);
});*/

Route::prefix('admin')->group(function() {
    Route::resource('users', UsersController::class);
});
