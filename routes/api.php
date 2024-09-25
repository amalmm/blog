<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('blog')->controller(BlogController::class)->group(function () {
    Route::get('/',  'index' );
    Route::get('/show/{blog}',  'show' );
    Route::post('/store',  'store' );
    Route::put('/update/{blog}',  'update' );
    Route::delete('/destroy/{blog}',  'destroy' );
});

// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('blog', function () {
//         return response()->json(['message' => 'Blog content goes here.']);
//     });
// });
