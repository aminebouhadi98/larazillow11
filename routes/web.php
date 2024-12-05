<?php

use App\Http\Controllers\IndexContoller;
use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return inertia('Index/Index');
});
*/

Route::get('/',[IndexContoller::class,'index']);
Route::get('/hello',[IndexContoller::class,'show']);
//Route::resource('listing',ListingController::class)->only('index','show','create','store');
Route::resource('listing',ListingController::class);