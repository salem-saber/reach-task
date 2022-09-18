<?php

use App\ReachTask\AdsModule\Controllers\AdsController;
use App\ReachTask\AdvertisersModule\Controllers\AdvertisersController;
use App\ReachTask\CategoriesModule\Controllers\CategoriesController;
use App\ReachTask\TagsModule\Controllers\TagsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('categories')->group(function (){
    Route::get('/' , [CategoriesController::class , 'getAll']);
    Route::get('/{id}' , [CategoriesController::class , 'getOne']);
    Route::post('/create' , [CategoriesController::class , 'create']);
    Route::patch('/update/{id}' , [CategoriesController::class , 'update']);
    Route::delete('/delete/{id}' , [CategoriesController::class , 'delete']);
});

Route::prefix('advertisers')->group(function (){
    Route::get('/' , [AdvertisersController::class , 'getAll']);
    Route::get('/{id}' , [AdvertisersController::class , 'getOne']);
    Route::get('/ads/{id}' , [AdvertisersController::class , 'advertiserAds']);
    Route::post('/create' , [AdvertisersController::class , 'create']);
    Route::patch('/update/{id}' , [AdvertisersController::class , 'update']);
    Route::delete('/delete/{id}' , [AdvertisersController::class , 'delete']);
});

Route::prefix('tags')->group(function (){
    Route::get('/' , [TagsController::class , 'getAll']);
    Route::get('/{id}' , [TagsController::class , 'getOne']);
    Route::post('/create' , [TagsController::class , 'create']);
    Route::patch('/update/{id}' , [TagsController::class , 'update']);
    Route::delete('/delete/{id}' , [TagsController::class , 'delete']);
});

Route::prefix('ads')->group(function (){
    Route::get('/' , [AdsController::class , 'getAll']);
    Route::get('/{id}' , [AdsController::class , 'getOne']);
    Route::post('/create' , [AdsController::class , 'create']);
    Route::patch('/update/{id}' , [AdsController::class , 'update']);
    Route::delete('/delete/{id}' , [AdsController::class , 'delete']);
});
