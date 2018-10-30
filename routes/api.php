<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('login', 'API\UserController@login')->name('user-login');
Route::post('register', 'API\UserController@register')->name('user-register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'API\UserController@details');
    Route::post('logout', 'API\UserController@logout');

    // Users routes
    Route::get('users/items','API\UserController@items');

    // Groups routes
    Route::get('groups/items','API\GroupController@items');

    // Items routes
    Route::post('items/add', 'API\ItemController@add');
    Route::post('items/item.out-of-stock/{item_id}','API\ItemController@outOfStock');
    Route::post('items/item.in-stock/{item_id}','API\ItemController@inStock');

});