<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ArticleController;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/




//Route::apiResource('article', [ArticleController::class]);

Route::get('/search/{searchTerm}', [App\Http\Controllers\Api\ApiController::class, 'search']);

Route::post('/create', [App\Http\Controllers\Api\ApiController::class, 'create']);

Route::get('/show/{id}', [App\Http\Controllers\Api\ArticleController::class, 'returnBody']);
