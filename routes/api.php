<?php

use App\Http\Controllers\CustomersController;
use App\Http\Controllers\UsersController;
use Illuminate\Foundation\Auth\User;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create_users', [UsersController::class, 'create']);
Route::get('user/{id}', [UsersController::class, 'single_user']);
Route::get('users', [UsersController::class, 'all_users']);

Route::post('create_customers', [CustomersController::class, 'create']);
Route::get('customer/{id}', [CustomersController::class, 'single_customer']);
Route::get('customers', [CustomersController::class, 'all_customers']);