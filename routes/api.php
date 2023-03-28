<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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

// Route::resource('users', UserController::class);

Route::get('users/search/{first_name}', [UserController::class, 'search']); //GET search based on first_name

Route::get('users/create', [UserController::class, 'create']); //GET create new user

Route::get('users/filter', [UserController::class, 'filter']); //GET filtered search based on parameters

Route::get('/users', [UserController::class, 'index']); //GET all users

Route::get('/users/{id}', [UserController::class, 'show']); //GET user by id

Route::post('/users', [UserController::class, 'store']);  //POST create new user

Route::put('/users/{id}', [UserController::class, 'update']); //PUT update user by id

Route::delete('/users/{id}', [UserController::class, 'destroy']); //DELETE user by id

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
