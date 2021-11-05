<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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



/*
Route::get('/building',function(){
    return "建物です";
});
Route::get('/building/{room?}', function($room){
    return "部屋番号は".$room."です";
});
*/
Route::get('/building', [TestController::class, 'index']);
Route::get('/building/{room?}', [TestController::class, 'room']);
