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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/palindrome', [Palindrome::class, 'PalindromeCount'])->name("Palindrome");
Route::get('/gettime', [Time::class, 'GetTime'])->name("GetTime");
Route::get('/callText', [CallText::class, 'callText'])->name("callText");
Route::get('/beerRecipe', [RandomBeerRecipe::class, 'randomRecipe'])->name("randomRecipe");




