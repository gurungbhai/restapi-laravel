<?php

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

// posts
// CRUD is basically
//1. get all1(GET) /api/posts
//2. create a post(POST) /api/posts
//3. get a single(GET) /api/posts/{id}
//4. update a single(PUT/PATCH) /api/posts{id}
//5. delete /api/posts{id}


// to creare a resource post in larave
// create database and migrations 
// create a model
// create a service
// create a controller to go get info from database
// return that info 
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student','App\Http\Controllers\ApiController@create'); #this is used to insert data
Route::get('/students','App\Http\Controllers\ApiController@show'); # this is used to read data
Route::get('/student/{id}','App\Http\Controllers\ApiController@showbyid'); #this is used to get the data from id
Route::put('/studentupdate/{id}','App\Http\Controllers\ApiController@updatebyid'); #update by id
Route::delete('/studentdelete/{id}','App\Http\Controllers\ApiController@delete'); 