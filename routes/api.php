<?php

use App\Http\Controllers\BankController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/getAllCustomers',[BankController::class,'allCustomers']);
Route::get('/getAllAccounts',[BankController::class,'allAcounts']);
Route::post('/CreateAccount/{customer}',[BankController::class,'create']); 
Route::post('/Transfer/from/{from}/to/{to}',[BankController::class,'transfer']);
Route::get('/getAccountAmount/{account}',[BankController::class,'getAmount']);
Route::get('/TransferHistory/{account}',[BankController::class,'history']);
