<?php

use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\InvoiceController;

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

//User
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user}', [UserController::class, 'show']);

//Invoices
Route::get('/invoices', [InvoiceController::class, 'index']);
Route::get('/invoices/{invoice}', [InvoiceController::class, 'show']);
